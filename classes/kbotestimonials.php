<?php

class kbotestimonials extends Module
{
    public function __construct()
        {
            $this->name = 'kbotestimonials';
            $this->tab = 'front_office_features';
            $this->version = '1.0.0';
            $this->author = 'Karina';
            $this->need_instance = 0;
            $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
            $this->bootstrap = true;

            parent::__construct();

            $this->displayName = $this->l('Testimonials Module');
            $this->description = $this->l('Awesome Module for testimonials stuffs.');

            $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

            if (!Configuration::get('KBOTESTIMONIALS_NAME')) {
                $this->warning = $this->l('No name provided');
            }
        }
        public function install()
    {

        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install()
            || !$this->registerHook('leftColumn')
            || !$this->registerHook('header')
            || !$this->installDb()
            || !$this->addAdminTab()
        ) {
            return false;
        }

        return true;
    }

    public  function installDb()

    {

        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'kbotestimonials` (
            `id_kbotestimonials` int(11) NOT NULL AUTO_INCREMENT,
            `kbotestimonials_name` varchar(50) NOT NULL,
            `kbotestimonials_description` varchar(200) NOT NULL,
            `date_kbotestimonials` datetime NOT NULL,
            PRIMARY KEY (`id_kbotestimonials`))';

        return Db::getInstance()->execute($sql);

    }

    public function uninstallDb()

    {

             $sql = 'DROP TABLE '._DB_PREFIX_.'kbotestimonials';

             Db::getInstance()->execute($sql);

             return true;

    }
    public function uninstall()

    {

        if (!parent::uninstall()

            || !Configuration::deleteByName('KBOTESTIMONIALS_NAME')
            || !$this->uninstallDb()
            || !$this->removeAdminTab()

        ) {

            return false;

        }

        return true;

    }
    public function addAdminTab()

    {

        // création de l'onglet

        $tab = new Tab();

        foreach(Language::getLanguages(false) as $lang)

            $tab->name[(int) $lang['id_lang']] = 'kbotestimonials';

        // Nom du controller sans le mot clé "Controller"

        $tab->class_name = 'Adminkbotestimonials';

        $tab->module = $this->name;

        $tab->id_parent = 0;

        if (!$tab->save())

            return false;

        return true;

    }
    public function removeAdminTab()

    {

        $classNames = array('admin_kbotestimonials' => 'Adminkbotestimonials');

        $return = true;

        foreach ($classNames as $key => $className) {

            $tab = new Tab(Tab::getIdFromClassName($className));

            $return &= $tab->delete();

        }

        return $return;

    }

}
