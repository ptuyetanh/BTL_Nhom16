<?php 
session_start();
    include('dbcon.php');


    if( isset($_POST['comment_load_data']))
    {
        $commentS_query = "SELECT * FROM comment";
        $comments_query_run = mysqli_query($conn,$commentS_query);
        $array_result = [];

        if(mysqli_num_rows($comments_query_run)>0)
        {
            foreach($comments_query_run as $row)
            {
                $user_id = $row['commentBy'];
                $user_query = "SELECT * FROM db_nguoidung WHERE   ma_nguoidung = $user_id LIMIT 1";
                $user_query_run = mysqli_query($conn,$user_query);
                $user_result = mysqli_fetch_array($user_query_run);
                array_push($array_result, ['cmt'=>$row,'user'=>$user_result]);

            }
            header('content-type: application/json');
            echo json_encode($array_result);
        }
        else
        {
            echo" give a comment";
        }
    }






    if(isset($_POST['add_comment']))
    {
        $msg =mysqli_real_escape_string($conn,$_POST['msg']);
        $user_id = $_SESSION['isSigninOK'] ;
        $comment_add_query = "INSERT INTO comment (commentBy,comment) values ('$user_id','$msg')"; 
        $comment_add_query_run = mysqli_query($conn,$comment_add_query);
        if($comment_add_query_run)
        {
            echo"thành công";
        }
        else
        {
            echo"thất bại";
        }
    
    
    }



?>