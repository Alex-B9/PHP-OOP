<?php
require '../classes/DataBaseConnection.class.php';
//require 'classes/post.class.php';
require_once '../classes/Form.class.php';
require_once '../classes/HTML.class.php';
//require 'classes/Car.class.php';
session_start();

$form = new Form($_POST);
$html = new html();
//$vroum = new car('audi', '125000', 'BE', '150000', '2015');
//$vroumun= new car('bmw', '750', 'DE', '60000', '2019');

//if (!isset($_SESSION['user']) ||(trim($_SESSION['user']) == '')){
//    header('location:./index.php');
//}
//$user = new user('test', 'tst', 'tst');
//
////fetch sql data
//$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user'] . "'";
//$row = $user->details($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?=$html->meta('description', 'bla bla bla') ?>
    <?=$html->style('styles/style.css') ?>
    <title>Document</title>
</head>
<body>
    <?= $html->img('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqQXCfw2Ulfrfe1xG2NGkSe7FOnT0h9AEjcQ&usqp=CAU', '') ?>
    <?= $html->links('www.becode.org', 'becode'); ?>
    <form action="#" method="post">
        <?php
        echo $form->input('username');
        echo $form->input('pass');
        echo $form->textarea();
        $form->select('bla bla');
        echo $form->radio('test', 'one', 'two', 'three');
        echo $form->checkbox('bla', 'bla bla');
        echo $form->submit();
        ?>
    </form>
<!--    <table>-->
<!--        <thead>-->
<!--            <tr>-->
<!--                <th> Brand |</th>-->
<!--                <th> Free ? |</th>-->
<!--                <th> Type|</th>-->
<!--                <th> Country |</th>-->
<!--                <th> Km |</th>-->
<!--                <th> Age </th>-->
<!--            </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--<!--        -->--><?////= $vroum->display();?>
<!--<!--        -->--><?////= $vroumun->display();?>
<!--        </tbody>-->
<!--    </table>-->

    <?= $html->script('/scripts/app.js')?>
</body>
</html>

