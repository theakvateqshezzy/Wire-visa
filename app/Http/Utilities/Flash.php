<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Session;

class Flash{
  
  public static function success($message)
  {
    Session::flash('status', true);
    Session::flash('message',$message);
  }
  
  
  public static function failure($message)
  {
    Session::flash('status', false);
    Session::flash('message',$message);
  }

  public static function modal($modalName)
  {
    Session::flash('modal',$modalName);
  }

  public static function updateId($id)
  {
    Session::flash('updateId',$id);
  }

}