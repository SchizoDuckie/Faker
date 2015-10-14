<?php

namespace Faker\Provider\nl_NL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}'
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );
    
    protected static $companyPrefix = array('Vereniging', 'Stichting');
    protected static $companySuffix = array('VOF', 'CV', 'Maatschap', 'BV', 'NV', '& Zonen', '& Zn');
    
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
