<?php


class AdminkbotestimonialsController extends ModuleAdminController

{

    public function __construct()
 {

    $this->table='kbotestimonials';
    $this->className='kbotestimonialsPost';
    $this->bootstrap=True;

     $this->fields_list = array(

       'kbotestimonials_name' => array(
           'title' => $this->l('kbotestimonials_name'),
       ),
       'kbotestimonials_description' => array(
           'title' => $this->l('kbotestimonials_description'),
       ),
       'date_kbotestimonialstestimonials' => array(
           'title' => $this->l('date_kbotestimonials'),
       ),
   );

   parent::__construct();


   $this->fields_form = array(
  'legend' => array(
    'title' => $this->l('Edit kbotestimonialstestimonials'),
  ),
  'input' => array(
    array(
      'type' => 'text',
      'name' => 'kbotestimonials_name',
      'label'=> 'Nom'
     ),
    array(
      'type' => 'textarea',
      'name' => 'kbotestimonials_description',
      'label'=> 'Description'
     ),
    array(
      'type' => 'date',
      'name' => 'date_kbotestimonials',
      'label'=> 'Date'
     ),
  ),
  'submit' => array(
    'title' => $this->l('Save'),
    'class' => 'btn btn-default pull-right'
  )
);
 }

}
