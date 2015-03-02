<?php

class Admin extends News
{
    public static function add($news)
    {
        $db = new DB;
        $db->queryAdd($news);
    }

    public static function update($news)
    {
        echo 'update(news)<br>';
        $db = new DB;
        $db->queryUpdate($news);
    }
}

// фреймворк Yii
