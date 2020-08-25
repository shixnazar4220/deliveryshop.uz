<?php

$homeurl = Yii::$app->homeUrl.'shoptheme/';
$logourl = Yii::$app->homeUrl.'uploads/images/';
$imageurl = Yii::$app->homeUrl.'';
$myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
// Get domain portion
$myUrl .= '://'.$_SERVER['HTTP_HOST'];
$home = $myUrl;
// Get path to script
$myUrl .= $_SERVER['REQUEST_URI'];
// Add path info, if any
if (!empty($_SERVER['PATH_INFO'])) $myUrl .= $_SERVER['PATH_INFO'];
