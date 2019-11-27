<?php 
namespace Teik\Controller;
//Add Controllers to the array 
$controllers = [
];


foreach ($controllers as $key => $controller) {
  $controller->hook();
}