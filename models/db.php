<?php

require __DIR__. '/../functions/sql.php';

class DB{

    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('library');
    }

    public function queryAll($sql, $class='stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res){
            return false;
        }
        $arr = [];
        while ($obj = mysql_fetch_object($res, $class)){
            $arr[] =  $obj;
        }
        return $arr;
    }

    public function queryOne($sql, $class='stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }

    public function queryAdd($news)
    {
        $query = "INSERT INTO news ( title, text )
                        VALUES('$news->title', '$news->text')";
        if ($res = mysql_query($query)){
            return true;
        }
        return false;
    }

    public function queryUpdate($news){

        $query = "UPDATE news SET  title = '$news->title',
                                   text = '$news->text' WHERE id = '$news->id' ";

        if ($res = mysql_query($query)){
            return true;
        }
        return false;
    }
}