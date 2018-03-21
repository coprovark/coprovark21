<!-- <?php

// namespace App\Http\Middleware;

// use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

// class VerifyCsrfToken extends Middleware
// {
//     /**
//      * The URIs that should be excluded from CSRF verification.
//      *
//      * @var array
//      */
//     protected $except = [
//         '*'
//     ];
// } -->

<?php
 
 namespace App\Http\Middleware;
 
 use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
 
 class VerifyCsrfToken extends Middleware
 {
     /**
      * The URIs that should be excluded from CSRF verification.
      *
      * @var array
      */
     protected $except = [
-        '*','form_register_save','list_users1'
+        '*','form_register_save','list_users1','form2'
     ];
 
 }