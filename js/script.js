//xác thực email
$(document).ready(function(){
    //client:kiểm tra tích hợp lệ của email
     $("#inputemail").change(function(){
         let emailPatterm = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@(gmail.com)$/;
         if(emailPatterm.test($(this).val()) == false){
             $("#emailHelp").text("Email không hợp lệ ").css("color","red");
         }else{
            $.ajax ({
                url:"check-signup.php",
                type:"post",
                data:{email:$(this).val()},
                //callback funtion 
                success:function(res){
                    $("#emailHelp").text(res).css("color","green");
                }
            })
         }
         //Server:Gửi dữ liệu về sever để kiểm tra phản hồi(nếu có nỗi)
         //Cách Non ajax: gửi qua action="process-signup.php" method="post"

         // 1 Cách dùng Ajax tôi ko cần submit tôi chỉ cần rời khỏi ô nhập là nó gửi
     })
   })