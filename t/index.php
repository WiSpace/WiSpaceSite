<?php
if (isset($_GET['t'])) {
    $t_arr = array(
        'd' => 'https://www.donationalerts.com/c/wispace',
        'b' => 'https://boosty.to/wispace',
        'tc' => 'https://t.me/wispace_ru',
        'ta' => 'https://t.me/willishw',
        'ds' => 'https://discord.gg/k2gEqcFCHZ',
        'g' => 'https://github.com/WiSpace',
        'k' => 'https://t.me/kittensender_bot',
        'l' => 'https://linktr.ee/wispace'
    );
    $t = $t_arr[$_GET['t']];
    header("Location: $t");
} elseif (isset($_GET['f'])) {
    $t_arr = array(
        'f1' => 'https://cloud.mail.ru/public/MZHM/Lieh2aaEN', // книги 114ГБ
        'f2' => 'https://cloud.mail.ru/public/GQzX/6yug6CXMn', // 582гб видео
        'f3' => 'https://cloud.mail.ru/public/4chu/vypsBzpSr', // 285ГБ языки иностраннннныеыеыеые
        'f4' => 'https://mega.nz/folder/1rBHzIyD#M-aTi-c1nC3OGNgpH8OqhA/folder/IiwQiIDA' // англ курсы 1ТБ
    );
    $t = $t_arr[$_GET['f']];
    header("Location: $t");
} else {
    exit();
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Redirect to <?=$t?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
            body {
                background: #313131;
                color: #ffffff;
                height: 90vh;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'Rubik', sans-serif;
            }
            a:link, a:visited, a {
                color: #ffdfdf;
                font-size: 200%;
            }
            a:hover {
                color: #f1dfff;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <a href="<?=$t?>">click to redirect</a>
    </body>
</html>