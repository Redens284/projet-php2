<?php


function connectBdd(array $infoBdd): ?\PDO
{
    $db = null;

    $myinterface = ($infoBdd['interface']);
    $mytype = ($infoBdd['type']);
    $myhost = ($infoBdd['host']);
    $myport = ($infoBdd['port']);
    $mycharset = ($infoBdd['charset']);
    $mydbname = ($infoBdd['dbname']);
    $myuser = ($infoBdd['user']);
    $mypass = ($infoBdd['pass']);

    //   du DSN

    $dsn = "{$mytype}:host={$myhost};dbname={$mydbname};charset={$mycharset}";


    $db = new PDO($dsn, $myuser, $mypass);

    return $db;


}
