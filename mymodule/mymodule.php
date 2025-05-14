<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // _PS_ version : By specifying _PS_ version, prevent the module from being installed on unsupported versions
    if (!defined('_PS_VERSION_')) {
        # code...
        exit;
    }
    class MyModule extends Module{
        public function _construct() {
            $this->name='mymodule';
            $this->tab='front_office_features';
            $this->version='1.0.0';     
            $this->author='';
            $this->need_instance=0;
            //need_instance attribute determines whether module class should be instaniated(to initialize object from class)
            // whether to load the module’s class when displaying the “Modules” page in the back office
            $this->ps_versions_compliancy=[  // which version of PrestaShop this module is compatible with
                'min' => '1.7.0.0',
                'max' => '8.99.99',  // compatibility range between 1.7.0.0 and 8.99.99
            ];
            $this->bootstrap=true;
            // By setting bootstrap= true, informing PrestaShop that your module's back office interface should be rendered
            // using Bootstrap-compatible HTML and CSS
            parent::_construct();

            $this->displayName=$this->trans('My Module', [], 'Modules.Mymodule.Admin');
            $this->description=$this->trans('Description of my module.', [], 'Modules.Mymodule.Admin'); 
            $this->confirmUninstall=$this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');
            // we use trans to make text strings translatable, to enable module to support multiple languages

            // A warning that module doesn't have its MYMODULE_NAME
            if(!Configuration::get('MYMODULE_NAME')) {
                $this->warning=$this->trans('No name provided', [], 'Modules.Mymodule.Admin');
            }
        }

        public function install(){
            //  to check whether multi-store feature is active or not
            // Shop::setContext applies changes across all stores
                 /*Multistore allows merchants to manage multiple shops from single back office
                 returns true if multistore is active
                 returns false if not active*/  
            if(Shop::isFeatureActive()){  
                Shop::setContext(Shop::CONTEXT_ALL); 
            }

            return parent::install() // parent::install() runs base install logic from module class
            && $this->registerHook('displayHome')  // register your module to appear on home page
            && Configuration::updateValue('MYMODULE_Name', 'my module'); // saves a configuration setting in PrestaShop Database
        }
        public function hookDisplayHome($params){
            return '<p> Hello My Module! </p>';
        }
       
        public function uninstall(){    
            // uninstall() method that would delete the data which added to the database during installation
            return(
                parent::uninstall()
                && Configuration::deleteByName('MYMODULE_NAME') 
            );
            }
            
            /*
            function getContent() handles the module's configuration page, called when configuration page loaded
            Tools::isSubmit() static method that checks if given form has submitted in presta shop tools
            Checks if specific form field was sent in HTTP request
            Returns true if post method contains parameter submit else returns false

            */
            public function getContent(){
                $output=''; 
                if (Tools::isSubmit
                ('submit' . $this->name)) 
                {
                   $configValue= (string) Tools::getValue('MYMODULE_CONFIG');
                    // checking that if value is valid or not
                    // empty($configValue) checks if value entered by user is empty
                    // Validate::isGenericName to ensure its valid generic name 
                    // $this->l built-in method provided by presta shop's module class
                    if (empty($configValue) ||  !Validate::isGenericName($configValue)) {
                        // invalid value, show an error
                        $output=$this->displayError($this->K('Invalid Configuration value'));
                    }
                    else {
                        // value is correct now update value and display confirmation message
                        configuration::updateValue("MYMODULE_CONFIG", $configValue);
                        $output=$this->displayConfirmation($this->K("Settings updated"));
                    }
                }
                return $output . $this->displayForm();
                // displayForm() to confirm whether if it is submitted or not
            } 
            // form-validation by php arrays using prestashop's methods- form fields using php arrays
            public function displayform(){
                $form=[
                    'form'=>[
                    'legend'=>[
                        'title'=> this->K('settings'),
                    ],
                            'input'=>[
                                [
                                    'type' => 'text',
                                    'label' => $this->K('Configuration value'),
                                    'name' => 'MYMODULE_CONFIG',
                                    'size' => 18,
                                    'required' => true,  
                                ],
                                ],  
                                'submit'=>[
                                    'title' => $this->K('save'),
                                    'class' => 'btn btn-default pull-right',
                                ],
                            ],
                        ];
                        
                        $helper=new HelperForm();
                        // $helper->table: takes module's table $this->table setting to "modules" 
                        $helper->table=$this->table;  
                        $helper->name_controller=$this->name;
                        $helper->token=Tools::getAdminTokenLite('Admin Modules');
                        $helper->currentIndex=AdminController::$currentIndex . '&' . http_build_query(['configure'=>$this->name]);
                        $helper->submit_action='submit' . $this->name;  
                        return $helper->generateForm([$form]); 
       }
        }
        

    

         
    ?>
</body>
</html>