$(document).ready(function(){
    load_comment();
    function load_comment(){
        $.ajax({

            type: "POST",
            url :"code.php",
            data : {
                'comment_load_data' : true
            },
            success: function(response){
               
                $('.comment-container').html("");
                // console.log(response)
                $.each(response,function(key,value){

                
                $('.comment-container').
                append('<div class="reply-container-desc">\
                        <a href = "profile.php" class="reply-user-fullName text-dark text-decoration-none"> '+value.user['tennguoidung']+'</a>\
                        <div class="reply-username">@'+value.user['tendangnhap']+' </div>\
                        <div class="reply-date"> '+value.cmt['commentAt'] + '</div>\
                        </div>\
                    <div class="reply-desc-text"> '+value.cmt['comment'] + ' </div>\
                ');
                            
            });
               
            }
        });

    }





    $('.reply-btn').click(function(e){

        e.preventDefault();
            var msg =  $('.replytxt').val();
            if($.trim(msg).length == 0)
            {
                error_msg = "nhập comment";
                $('#error_status').text(error_msg);
            }
            else{
                error_msg ="";
                $('#eerror_status').text(error_msg);
            }
            if(error_msg !='')
            {
                return false;
            }
            else
            {
                var data = {
                    'msg' : msg,
                    'add_comment' :true,
                };
                $.ajax({

                    type: "POST",
                    url :"code.php",
                    data : data,
                    success: function(response){
                        alert(response);
                        $('.replytxt').val("");
                    }
                });

            }

    });



});