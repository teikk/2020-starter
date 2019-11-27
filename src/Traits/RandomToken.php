<?php 
namespace Teik\Traits;

trait RandomToken {
  public function generateToken($length = 6) 
  {
    $token = base64_encode(md5(uniqid(), true));
    return strtr(substr($token, 0, $length), '+/', '-_');
  }
}