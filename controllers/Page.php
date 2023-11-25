<?php

namespace app;

class Page
{
    public function getPageUrl($name_page)
    {

        if (strlen($name_page) > 2 ){
            return require ("../web/pages/$name_page.php");
        }

        return require ("../web/pages/main.php");
    }
}