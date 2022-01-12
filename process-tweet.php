<?php
  //xử lý giá trị gửi 
  if(isset($_POST['content_status'])){
    $content_status=$_POST['content_status'];
    $myFile=$_POST['myFile'];
    $tweetID=0;
  session_start();
     if(!isset($_SESSION['isSigninOK'])){
         header("location:signin.php");
     }
     $ma_nguoidung = $_SESSION['isSigninOK'];
  $conn = mysqli_connect('localhost','root','','twitter');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }
  //Thực hiện truy vấn
  $sql = "INSERT INTO tweet(content_status,ma_nguoidung) VALUES('$content_status','$ma_nguoidung')";
  $result_tweet = mysqli_query($conn,$sql);
  if(!$result_tweet){
      header("location: index.php");
  }else{
      header("location:home.php");
  }
}
$conn = mysqli_connect('localhost','root','','twitter');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }
   $statusMsg = '';//TẠO 1 BIẾN ĐỂ LƯU LẠI TRANG THÁI UPLOAD NHẰM MUC TIEU PHẢN HỒI
   
   //động tác thiết lập cho việc chuẩn bị upload
  $targetDir = "uploads/";//thư mục chỉ định nằm cùng trong project để lưu lại tệp tải lên
  $fileName = basename($_FILES["myFile"]["name"]);//
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin;
  //echo $fileType;
   //Kiểm tra xem người dùng ấn submit chưa và file được chọn chưa;
  if(isset($_POST["submit"]) && !empty($_FILES["myFile"]["name"])){
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
              // Insert image file name into database
              $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
              if($insert){
                  $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              }else{
                  $statusMsg = "File upload failed, please try again.";
              } 
          }else{
              $statusMsg = "Sorry, there was an error uploading your file.";
          }
      }else{
          $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
      }
  }else{
      $statusMsg = 'Please select a file to upload.';
  }

// Display status message
echo $statusMsg;
?>