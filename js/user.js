$(document).on('click', '.follow', function(){
	var ma_nguoidung = $(this).data("ma_nguoidung");		
	var action = 'followUser';
	$.ajax({
		url:'user_action.php',
		method:"POST",
		data:{ma_nguoidung:ma_nguoidung, action:action},
		dataType:"json",
		success:function(response){				
			if(response.success == 1) {
				$("#follow_"+ma_nguoidung).text("Following");
				$("#following").text(parseInt($("#following").text()) + 1);
			}					
		}
	});
});

$(document).on('click', '.unfollow', function(){
	var ma_nguoidung = $(this).data("ma_nguoidung");		
	var action = 'unfollowUser';
	$.ajax({
		url:'user_action.php',
		method:"POST",
		data:{ma_nguoidung:ma_nguoidung, action:action},
		dataType:"json",
		success:function(response){				
			if(response.success == 1) {
				$("#follow_"+ma_nguoidung).text("Follow");
				$("#following").text(parseInt($("#following").text()) - 1);
			}					
		}
	});
});



// $(document).on('click', '.likePost', function(){
// 	var ma_nguoidung = $(this).data("tweetID");		
// 	var action = 'likePost';
// 	$.ajax({
// 		url:'user_action.php',
// 		method:"POST",
// 		data:{ma_nguoidung:ma_nguoidung, action:action},
// 		dataType:"json",
// 		success:function(response){				
// 			if(response.success == 1) {
// 				$("#like_"+tweetID).removeClass("likePost").addClass('dislikePost');
// 				$("#likeIcon_"+tweetID).removeClass('<i class="bi bi-heart"></i>').attr("title","liked");
// 			}					
// 		}
// 	});
// });