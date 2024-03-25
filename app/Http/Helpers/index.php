<?php

function Replace($data){
    $data = str_replace("!","",$data);
    $data = str_replace("@","",$data);
    $data = str_replace("#","",$data);
     $data = str_replace("$", "", $data);
    $data = str_replace("%", "", $data);
    $data = str_replace("^", "", $data);
    $data = str_replace("&", "", $data);
    $data = str_replace("*", "", $data);
    $data = str_replace("(", "", $data);
    $data = str_replace(")", "", $data);
    $data = str_replace("?", "", $data);
    $data = str_replace("+", "", $data);
    $data = str_replace("=", "", $data);
    $data = str_replace(",", "", $data);
    $data = str_replace(":", "", $data);
    $data = str_replace(";", "", $data);
    $data = str_replace("|", "", $data);
    $data = str_replace("'", "", $data);
    $data = str_replace('"', "", $data);
    $data = str_replace("  ", "-", $data);
    $data = str_replace(" ", "-", $data);
    $data = str_replace(".", "-", $data);
    $data = str_replace("__", "-", $data);
    $data = str_replace("_", "-", $data);
    return strtolower($data);
}

function encryptor($action, $string){
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = "beatnik#technolgoy_sampreeti";
    $secret_iv = 'beatnik$technolgoy@sampreeti';

     $key = hash('sha256', $secret_key);


      $iv = substr(hash('sha256', $secret_iv), 0, 16);


      if($action == 'encrypt'){
        $output = openssl_encrypt($string,$encrypt_method,$key,0,$iv);
        $output = base64_encode($output);
      }
      else if( $action == 'decrypt'){
        $output = openssl_decrypt(base64_decode($string),$encrypt_method,$key,0,$iv);

      }
      return $output;
}

function countUnicodeWords($unicode_string){
    $unicode_string = preg_split("/[\n\r\t ]+/",$unicode_string, 0,PREG_SPLIT_NO_EMPTY);
    $unicode_string = preg_replace('/[[:punct:][:digit:]]/','',$unicode_string);
    $unicode_string = preg_replace('/[[:space:]]/',' ',$unicode_string);

    return count($words_array);
}
function limitWordShow($string,$word_limit){
    $words = explode(" ",$string);
    return implode(" ", array_splice($words,0,$word_limit));
}
function currentUserId(){
    return encryptor('decrypt',request()->session()->get('userId'));
}
function fullAccessId(){
    return encryptor('decrypt',request()->session()->get('accessTypte'));
}
function fullAccess(){
    return encryptor('decrypt',request()->session()->get('accessType'));
}

function currentUser(){
    return encryptor('decrypt',request()->session()->get('roleIdentity'));
}