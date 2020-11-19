<?php
namespace ObjectAddOn\AddInObject;
/**
 *
 */
class Object_
{

  public  function __set($attribute_name,$attribute_value)
  {

    echo "IMPOSIBLE!<br>Erreur Code: 03778199462995";
  }

  public function __get($attribute_name)
  {
    if (isset(self::$$attribute_name)) {
      echo "IMPOSIBLE!<br>Erreur Code: 03779269942995";
    }else {
      echo "IMPOSIBLE!<br>Erreur Code: 03779269017995";
    }
  }
  public function __isset($attribute_name)
  {
    if (isset(self::$$attribute_name)) {
      return 1;
    }else {
      return 0;
    }
  }
  public function __unset($attribute_name)
  {
    if (isset(self::$$attribute_name)) {
      return 0;
    }else {
      return 0;
    }
  }

  public function __call($method_name,$method_argument)
  {
    echo "IMPOSIBLE!<br>Erreur Code: 03199469017995";

  }
  public static function __callStatic($method_name,$method_argument)
  {
    echo "IMPOSIBLE!<br>Erreur Code: 03293465017995";

  }

  public function __invoke($value)
  {
  echo $value;
  }
  public function __toString()
  {
    return "This class documentation!";
  }
}
?>
