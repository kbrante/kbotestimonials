<?php
class kbotestimonialsdisplayModuleFrontController extends ModuleFrontController
{
    public function initContent()
     {
         parent::initContent();
         $this->setTemplate('display.tpl');
         $result = $this->get_posts();
         foreach ($result as $post) {
             $post["link"] = $this->context->link->getModuleLink('kbotestimonials', 'details',
             array(
                 'id' => $post["id_kbotestimonials"]
             ));
             $kbotestimonials_post[] = $post;
         }
         $this->context->smarty->assign("posts", $kbotestimonials_post);
     }
     public function get_posts()
     {
         $posts = new DbQuery();
         $posts->select('*');
         $posts->from('kbotestimonials');
         return Db::getInstance()->executeS($posts);
     }
}
