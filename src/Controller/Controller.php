<?php
namespace Teik\Controller;

use Teik\Traits\RandomToken;
use Timber\Timber;

class Controller
{
  use RandomToken;
  /**
   * Hook into theme
   */
  public function hook()
  {

  }  

  public function noPermission() {
    header('HTTP/1.1 403 No permission',true);
    Timber::render('404.twig');
  }
}
