<?php

function menu_item(string $link, string $title, string $className = '') : string{
    $class='';
    if($_SERVER['SCRIPT_NAME'] === $link){
        $class .= 'active';
    }
    return <<<HTML
        <a class='$className $class' aria-current="page" href="$link">$title</a>
HTML;
}

function nav_menu(string $className){
    return 
        menu_item('/index.php','Home',$className).
        menu_item('/views/api.php','Api',$className).
        menu_item('/views/more.php','More',$className);
}




?>