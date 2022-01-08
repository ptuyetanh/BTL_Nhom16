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
   $(document).ready(function(){
     $("#inputpassword1").change(function(){
         let passPatterm = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
         //Tối thiểu tám ký tự, ít nhất một chữ cái viết hoa, một chữ cái viết thường và một số:
         if(passPatterm.test($("#inputpassword1").val()) == false){
             $("#pass1Help").text("Mật khẩu Tối thiểu tám ký tự, ít nhất một chữ cái viết hoa, một chữ cái viết thường và một số").css("color","red");
         }else{
            $.ajax ({
                url:"check-passSignup.php",
                type:"Post",
                data:{password1:$(this).val()},
                //callback funtion 
                success:function(re){
                    $("#pass1Help").text(re).css("color","green");
                }
            })
         }
     })
   })
//xử lý sìdebar
$(function(){
//alert ("jwhsdeiuwq");
 let path=window.location.href;
 $('#sidebarMenu ul li a').each(function(){
     if(this.href==path){
        $(this).addClass('active')
     }
 })
})
//xử lý nút post(chạy không vào)
let textarea = document.querySelector("#content_status");
let inputButton = document.querySelector("#submit-tweet-button");
textarea.addEventListener("change",stateHandle);
inputButton.disabled= true;
function stateHandle(){
    if(document.querySelector("#content_status").value === ""){
        inputButton.disabled=true; 
    }else{
        inputButton.disabled=false; 
    }

}