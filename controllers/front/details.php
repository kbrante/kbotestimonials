<?php
class kbotestimonialsdetailsModuleFrontController extends ModuleFrontController
{
    public function initContent()
       {
           parent::initContent();
           $this->setTemplate('details.tpl');
           $this->context->smarty->assign("post", $this->get_post(Tools::getValue("id")));
       }
       public function get_post(int $id)
       {
           $posts = new DbQuery();
           $posts->select('*');
           $posts->from('kbotestimonials');
           $posts->where('id_kbotestimonials ='.$id);
           return Db::getInstance()->executeS($posts);
       }
    }
 
