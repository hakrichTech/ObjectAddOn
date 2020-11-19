<?php
namespace ObjectAddOn\PostDatas\Temp;


/**
 *
 */
 use \ObjectAddOn\AddInObject\Object_ as classAddIn;

class datas extends classAddIn
{
   private static $bdd;

   CONST CONTENT=1;
   CONST IMAGES=2;

  function __construct($x)
  {
    self::$bdd=$x;
  }
  private static function FETCHS()
  {
  }
  public static function GET_IN($x)
  {

  }
  public static function IMGTYPE()
  {
  }
  public static function CLR()
  {
  }
}



 ?>
