<?php
class User{
    private $userTable = 'db_nguoidung';
    private $followTable = 'follow';
    private $likeTable = 'likes';
    private $conn;

    public function getFollower(){
        if(!empty($_SESSION["ma_nguoidung"])){
            $sqlQuery = "SELECT db_nguoidung.ma_nguoidung,db_nguoidung.tendangnhap,db_nguoidung.profileImage FROM ".$this->userTable."AS user
            LEFT JOIN " .$this->followTable."follow On db_nguoidung.
            ma_nguoidung = follow_id
            WHERE follow.followed_user_id = '".$_SESSION["ma_nguoidung"]."'";
            $stmt =$this ->conn->get_result();
            return $result;
        }
    }
    public function followUser() {
        if($_SESSION["ma_nguoidung"] && $this->followUserId) {			
            $sqlQuery = "INSERT INTO ".$this->followTable."('follower_id', 'followed_user_id')
                VALUES(?, ?)";					
            $stmt = $this->conn->prepare($sqlQuery);						
            $stmt->bind_param("ii", $_SESSION["ma_nguoidung"], $this->followUserId);	
            if($stmt->execute()){				
                $output = array(			
                    "success"	=> 	1
                );
                echo json_encode($output);
            }
        }		
    }
    public function unfollowUser() {
        if($_SESSION["ma_nguoidung"] && $this->followUserId) {			
            $sqlQuery = "DELETE FROM".$this->followTable."WHERE follower_id =? AND followed_user_id = ?";
                					
            $stmt = $this->conn->prepare($sqlQuery);						
            $stmt->bind_param("ii", $_SESSION["ma_nguoidung"], $this->followUserId);	
            if($stmt->execute()){				
                $output = array(			
                    "success"	=> 	1
                );
                echo json_encode($output);
            }
        }		
    }
}
    


?>
