<?php

namespace App\Models;


class Home extends \Core\Model
{
  public static function analyze($json)
  {
      $db = static::getDB();
      $statement = $db->prepare("query");
      $statement->execute();
      //data into db select
      return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}
