<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 30.10.19
 * Time: 0:11
 */

class MyShortCode extends BaseComponent
{

    public function printSC($atts, $content)
    {
        return $this->render('test.php', ['data' => 'Привет'], false);
    }

}