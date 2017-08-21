/*function loadpage(page){

	$.ajax({
		url: "admin/page",
		method:"post",
		data: {page: page},
		success:function(result){
			$('.page_content').html(result);
		}

	});

}*/





$(document).ready(function(){
	$('.menu_item').hover(function(){
		if(!$(this).hasClass('active')){
			$( this).find('.submenu').addClass('show_sub_menu');
			$( this).find('.submenu').removeClass('hidden');
		}
	},function() {
		if(!$(this).hasClass('active')){
   			$( this).find('.submenu').removeClass('show_sub_menu');
			$( this).find('.submenu').addClass('hidden');
		}
	
  	});

/*  	$('.admin_menu > .menu_item').click(function(){

		$('.menu_item').removeClass('active');
		$( this).find('.submenu').removeClass('show_sub_menu');
		$(this).find('submenu').removeClass('hidden');
		$(this).addClass('active');
		$('.menu_item').not('.active').find('.submenu').not('.hidden').addClass('hidden');
	});*/

	$('.menu_item.active').find('.submenu').removeClass('hidden');

	$('.set-slider-image').click(function(){
  		jQuery("#myModal").modal();
	});

  });
