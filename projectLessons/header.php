
<?php
$data = require_once('data.php');
$lessons = $data['lessons'];
$themes = $data['themes'];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content, .footer, .header{
            width: 1000px;
            margin: 0px auto;
            box-sizing: border-box;
        }

        .header{ border-bottom: 3px solid #e6e6e6}
        .header:after{
            content:'';
            clear:both;
            display: block;
        }
        .header a {display: block; float: left; padding: 20px 30px; color: #EE9E8D; text-decoration: none;font-size: 20px; font-weight: bold;}
        .header a:hover{text-decoration: underline; color: #EE9E8D;}
        .header a:not(:last-of-type){border-right: 2px solid #e6e6e6;}
        .content{margin-top: 20px;margin-bottom: 20px; padding:20px;border:2px dotted #e6e6e6;}
        .footer a {display: block; float: left; padding: 10px 20px; color: #000; text-decoration: none;font-size: 16px;}
        .footer a:not(:last-of-type){border-right: 2px solid #e6e6e6;}
        .footer a:hover{text-decoration: underline; color: #000;}
        .footer p {display: block; text-align: center;}
    </style>
</head>
<body>
    <div class = "header">
    <?php foreach ($lessons as $lesson){?>
            <a href="<?= $lesson['link'] ?>"><?= $lesson['name'] ?></a>
    <?php }?>
    </div>
    <div class = "content">

