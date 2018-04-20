<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Acf;

class Single extends Controller
{


    public function flexiblecontent()
    {
        return (object) array(
            'layout' => have_rows('FlexibleContent'),
            'subfield' => the_sub_field('TextBox'),
            'subfield2' => the_sub_field('TextBox2'),
        );
    }
}