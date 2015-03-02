<?php
/**
 * Created by PhpStorm.
 * User: Олег
 * Date: 28.02.15
 * Time: 10:11
 */

class Ar{

  public static function dump($var)
  {
      ?><pre><?php var_dump($var);?></pre><?php
      echo '<br>';
  }
} 