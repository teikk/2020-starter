<?php
namespace Teik\Traits;

trait Singleton {
  protected static $instance = NULL;
  public static function instance() {
    // create an object
    NULL === self::$instance and self::$instance = new static;
    return self::$instance; // return the object
  }
}