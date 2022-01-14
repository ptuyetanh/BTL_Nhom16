<?php
if(isset($_POST['ma_nguoidung'])){
    $ma_nguoidung = $_POST['ma_nguoidung'];
}
// Xử lý giá trị GỬI TỚI
if(isset($_POST['tennguoidung'])){
    $tennguoidung = $_POST['tennguoidung'];
}

$story  = $_POST['story'];
$Dateofbirth = $_POST['Dateofbirth'];


// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn
$sql = "UPDATE db_nguoidung SET tennguoidung='$tennguoidung', story ='$story', Dateofbirth = '$Dateofbirth' WHERE ma_nguoidung=$ma_nguoidung";

$ketqua = mysqli_query($conn,$sql);
    header("location: profile.php"); 
$conn = mysqli_connect('localhost','root','','twitter');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["myFile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin

if(isset($_POST["submit"]) && !empty($_FILES["myFile"]["name"])){
    $allowTypes = array('jpg','png','jpeg','gif','pdf');//khai báo mảng để lưu chữ định dang mà bạn upload lên
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql="INSERT into images(file_name, uploaded_on) VALUES ('".$fileName."', NOW())";
            $insert =  mysqli_query($conn,$sql);
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