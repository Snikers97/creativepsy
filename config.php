<?php
//нужно чтобы все заработало
//де**о но выхода нет......пока
require_once ('function.php');
//константы
  define("HOST", "localhost");
  define("USER", "j.dev");
  define("PASSWORD", "20091968");
  define("DB_NAME", "psycamp");

//вызов юункцый
  $db_connect = Connect();
  //Получаем подготовленный массив с данными
  /*$cat  = getCat($db_connect); */
  //Создаем древовидное меню
  /*$tree = getTree($cat); */
  /*Получаем HTML разметку
  $cat_menu = showCat($tree);
  $about = aboutUs($db_connect);
*/
  /*
  $std_info='';
if (isset($_COOKIE['bd_create_success']) AND $_COOKIE['bd_create_success']!=''){
    if ($_COOKIE['bd_create_success'] == 1) {
        setcookie('bd_create_success', 1, time()-10);
        $flash =  "Ձեր տվյալները ընդունված են";
    }
}
$stq_question='';
if (isset($_COOKIE['bd_create_question_success']) AND $_COOKIE['bd_create_question_success']!=''){
    if ($_COOKIE['bd_create_question_success'] == 1) {
        setcookie('bd_create_question_success', 1, time()-10);
        $flash =  "Ձեր հարցումը ուղարկված է";
    }
}
*/
?>