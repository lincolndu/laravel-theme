

// With the element initially hidden, we can show it slowly:
$(document).ready(function() {
  $('#author').hover(function() {
    $('.hide').show();
  }); 

  $('.right_dash').hover(function() {
    $('.hide').hide();
  }); 

  $('.area_hide').click(function() {
    $('#sticky').hide();
    $('.menu_list').show();
  });

});

$(document).ready(function(){
	$(".home").click(function(){
		$(".all_post").show();
		$(".new_post").hide();
		$(".register").hide();
		$(".all_users").hide();
		$(".edit_users").hide();
  });
	$(".n_post").click(function(){
		$(".new_post").show();
		$(".all_post").hide();
		$(".register").hide();
		$(".all_users").hide();
		$(".edit_users").hide();
  });
	$(".user_regist").click(function(){
		$(".register").show();
		$(".all_post").hide();
		$(".new_post").hide();
		$(".all_users").hide();
		$(".edit_users").hide();
  });
	$(".all_author").click(function(){
		$(".all_users").show();
		$(".new_post").hide();
		$(".all_post").hide();
		$(".register").hide();
		$(".edit_users").hide();
  });

	$(".edit_author").click(function(){
		$(".edit_users").show();
		$(".new_post").hide();
		$(".all_post").hide();
		$(".register").hide();
		$(".all_users").hide();
  });
});