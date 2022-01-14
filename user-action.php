<?php
include_once 'config/database.php';
include_once 'user.php';
$database = new Database();
$db =$database->getConnection();
$user=new User($db);

if(!empty($_POST['action']) && $_POST['action']  == 'followUser'){
    $user->followUerid=$_POST["ma_nguoidung"];
    $user->followUser();
}
if(!empty($_POST['action']) && $_POST['action']  == 'unfollowUser'){
    $user->followUerid=$_POST["ma_nguoidung"];
    $user->unfollowUser();
}
// if(!empty($_POST['action']) && $_POST['action']  == 'likePost'){
//     $user->tweeID=$_POST["tweetID"];
//     $user->likePost();   
// }
// if(!empty($_POST['action']) && $_POST['action']  == 'dislikePost'){
//     $user->tweeID=$_POST["tweetID"];
//     $user->dislikePost();