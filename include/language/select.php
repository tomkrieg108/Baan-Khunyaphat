<?php

function GetFlagImgPath($lang) {
  if($lang == 'chi') {
    return 'images/flags/icons8-china-48.png';     
  } elseif ($lang == 'rus') {
    return 'images/flags/icons8-russian-federation-48.png';
  } elseif ($lang == 'thai') {
    return 'images/flags/icons8-thailand-48.png';
  } else {
    return 'images/flags/icons8-great-britain-48.png';
  }
}

function FlagImg($lang) {
  if($lang == 'chi') {
    echo 'images/flags/icons8-china-48.png';     
  } elseif ($lang == 'rus') {
    echo 'images/flags/icons8-russian-federation-48.png';
  } elseif ($lang == 'thai') {
    echo 'images/flags/icons8-thailand-48.png';
  } else {
    echo 'images/flags/icons8-great-britain-48.png';
  }
}

  session_start();
  if(empty($_SESSION['lang_file'])) {
    $_SESSION['lang_file'] = 'include/language/english.php';
    $_SESSION['flag_img'] = 'images/flags/icons8-great-britain-48.png';
  }
  
  if(isset($_GET['lang'])){
    if($_GET['lang'] == 'rus') {
      $_SESSION['lang_file'] = 'include/language/russian.php';
      $_SESSION['flag_img'] = 'images/flags/icons8-russian-federation-48.png';
    } elseif($_GET['lang'] == 'chi') {
      $_SESSION['lang_file'] = 'include/language/chinese.php';
      $_SESSION['flag_img'] = 'images/flags/icons8-china-48.png';   
    } elseif($_GET['lang'] == 'thai') {
      $_SESSION['lang_file'] = 'include/language/thai.php';
      $_SESSION['flag_img'] = 'images/flags/icons8-thailand-48.png';     
    } else {
      $_SESSION['lang_file'] = 'include/language/english.php';
      $_SESSION['flag_img'] = 'images/flags/icons8-great-britain-48.png';   
    }
  } 
  require_once $_SESSION['lang_file'];
?>