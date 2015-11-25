(function($){
   	$(window).load(function(){
    	$(".cont2").mCustomScrollbar({
    		theme:"dark"
    	});
    });
    $(window).load(function(){
    	$(".container").mCustomScrollbar({
    		theme:"light-thick"
    	});
    });
})(jQuery);

$(document).on('click', '.img_open_desc', function(){
	var src = $(this).attr('src2');
	var name = $(this).attr('name');
	var desc =$(this).attr('desc');
	var ves = $(this).attr('ves');
	$(".img_desc").attr("src",src); 
	$(".desc_name").text(name);
	$("#p_desc span").text(desc);
	$("#ves span").text(ves);
	$('#desc').show();
	return false;
});

$('.desc_close').click(function(){ 
	$('#desc').hide();
    return false;
});  

$(document).on('click', '.add_good_share', function(){
	var id = $(this).attr('id');
	var buy = $(this);
	$.ajax({
		url: '/basket/add_share',
		type: 'post',
		data: {id : id},
		success: function (data) {
			console.log(data);
			$('.baskets_cost span').text(data);
			buy.attr('buy', 1);
		}
	});
	return false;
});
$(document).on('click', '.add_good', function(){
	var id = $(this).attr('id');
	var buy = $(this);
	if(buy.attr('buy') == 0){
		$.ajax({
			url: '/basket/add',
			type: 'post',
			data: {id : id},
			success: function (data) {
				console.log(data);
				$('.baskets_cost span').text(data);
				$('#number'+id).show();
				buy.attr('buy', 1);
			}
		});
	}else{
		$.ajax({
			url: '/basket/delete',
			type: 'post',
			data: {id : id},
			success: function (data) {
				console.log(data);
				$('.baskets_cost span').text(data);
				$('#number'+id).hide();
				buy.attr('buy', 0);
				$('#number'+id+' input').val(1);
			}
		});
	}
	
	return false;
});

$(document).on('click', '.plus', function(){
	var id = $(this).attr('id_good');
	var val = $('#number'+id+' input').val() - 0;
	$.ajax({
		url: '/basket/add',
		type: 'post',
		data: {id : id},
		success: function (data) {
			$('.baskets_cost span').text(data);
		}
	});
	$('#number'+id+' input').val(val+1);	
	return false;
});

$(document).on('click', '.minus', function(){
	var id = $(this).attr('id_good');
	var val = $('#number'+id+' input').val() - 0;
	var buy = $(this).parent().parent().find('.add_good');
	if(val > 1){
		$.ajax({
			url: '/basket/delete_one',
			type: 'post',
			data: {id : id},
			success: function (data) {
				$('.baskets_cost span').text(data);
			}
		});
		$('#number'+id+' input').val(val-1);	
	}else{
		$.ajax({
			url: '/basket/delete',
			type: 'post',
			data: {id : id},
			success: function (data) {
				console.log(data);
				$('.baskets_cost span').text(data);
				$('#number'+id).hide();
				buy.attr('buy', 0);
				$('#number'+id+' input').val(1);
			}
		});
	}
	
	return false;
});


$(document).on('click', '.proc1', function(){
	var id = $(this).attr('p');
	$.ajax({
		url: '/share/set',
		type: 'post',
		data: {id : id},
		success: function (data) {
			console.log(data);
			$('.baskets_cost span').text(data);
			$('#discount span').text(id);
		}
	});
	$('.s').removeClass('active_shere');
	$(this).parent('.s').addClass('active_shere');
	return false;
});
