<?php


class kbotestimonialsPost extends ObjectModel
{

    public $id_kbotestimonials;
    public $kbotestimonials_name;
    public $kbotestimonials_description;
    public $date_kbotestimonials;
    public static $definition = array(
        'table' => 'kbotestimonials',
        'primary' => 'id_kbotestimonials',
        'fields' => array(
            'kbotestimonials_name' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'kbotestimonials_description' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
            'date_kbotestimonials' => array('type' => self::TYPE_DATE, 'validate' => 'isString'),
        ),
    );
}
?>
