<?php

$_GET['redirect'] = 11;
$query = http_build_query($_GET);

$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$ex = "";

// додаю у ех всі елменти строки $link до знака ?
for($i = 0; $i < strlen($link); $i++){
    if($link[$i] == "?"){
        break;
    }
    $ex .= $link[$i];
}


if($link == $ex."?".$query){
    echo ":) :) :) :) :) :) :) :) :) :) :) :)<br><br>:0 :0 :0 :0 :0 :0 :0 :0 :0 :0";
    exit();
}

header('Refresh: 0;URL='."?".$query);




