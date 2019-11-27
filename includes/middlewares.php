<?php
namespace Teik\Middleware;

$middlewares = [
];

foreach ($middlewares as $key => $middleware) {
  $middleware->hook();
}