<?php
namespace Trait;

/**
 *
 */
 use \ObjectAddOn\AddInObject\Object_ as ob;

class TraitManager extends ob
{

  private static $error=0;
  private static $app;
  private static $trait=array();
  private static $traitPath=array();

  function __construct($dir)
  {
    self::$app = $this;
    $a = self::CHECK_DIR($dir,"trait");
    if ($a) {
      self::$error = 0;
    }else {
      self::$error++;
    }
  }


  public static function CHECK_DIR($x,$array="")
  {
    $dir = __DIR__.'/../../../../../'.$x;
    if (is_dir($dir)) {
      if ($array == "AddOn") {
        self::INCLUDE_G_DIR($dir);
        return 1;
      }
    }
    return 0;
  }

  protected static function INCLUDE_G_DIR($x){
      $files = scandir($x);

      foreach ($files as $file) {
       if ($file!='.' && $file!="..") {
         self::$traitPath[]=$x.'/'.$file;
       }
     }
    }

public static function RUN()
{
   if (self::$error == 0) {
     foreach (self::$traitPath as $trait) {
       $content = file_get_contents($trait);
       $array = explode("/", $trait);
       $name = $array[count($array)-1];
       $file = __DIR__."/AddOn/".$name;
       fopen($file,"w+");
       file_put_contents($file,$content);
     }
     return 1;
   }
   return 0;
}

}



 ?>
