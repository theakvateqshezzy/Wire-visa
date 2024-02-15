<?php

namespace App\Http\Utilities;


class Helper{

  public static function toIndexedProperty($array, $key = 'id')
  {

    $response = [];
    
    foreach($array as $entry)
    {
      $response[$entry[$key]] = (object)$entry;
    }

    return $response;
  }


  public static function toQueryArray($string)
  {

    if($string === NULL || $string === 'undefined')
      return [];

    $response = [];

    $response = explode(',', $string);

    return $response;

  }

  public static function toPermissionProperty($array)
  {

    $responseAbilities = [];
    
    foreach($array as $ability){
      
      if(str_contains($ability, ":")){

        $explodedAbility = explode(":", $ability);
        $responseAbilities[$explodedAbility[0]] = (int)$explodedAbility[1];
        
      }else{
        $responseAbilities[$ability] = true;
      }
    }

    return $responseAbilities;
  }

  public static function stringGenerator($length = 10, $type = 'normal') 
  {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);

    if($type === 'hex'){
      $characters =  '0123456789ABCDEF';
      $charactersLength = strlen($characters);
    }
    
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  public static function assetsPath($fileName)
  {
    if($fileName)
      return asset('uploads/'.$fileName);
    else
      return null;
  }

  public static function getAbilityCount($ability)
  {
    if(str_contains($ability, ":")){

      $explodedAbility = explode(":", $ability);
      return (int)$explodedAbility[1];
      
    }else{

      return 0;

    }
  }

}