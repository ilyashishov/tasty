var price = 0;

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
			price = data;
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
				price = data;
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
				price = data;
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
			price = data;
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
				price = data;
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
				price = data;
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
	if (id == 20) {
		if(price > 2000){

		}else{
			alert('Ваш заказ менее 2000 рублей');
			return false;
		}
	};
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


$(document).ready(function() {
	$('.c_call').click(function(){
		$('#call_active').hide();
	});
	$('.button').click(function(){
		$('#call_active').show();
	});
});


$(document).ready(function() {
	$('.o_submit').click(function(){
		$('#addCommentContainer').show();
		$('#o_submit').hide();
	});

	$('#submit').click(function(){
		document.getElementById("addCommentContainer").style.display="none";
		document.getElementById("o_submit").style.display="block";
	});
	$(".cont3").mCustomScrollbar({
		theme:"dark",
		setTop: "10000px"
	});
});

























$(document).ready(function(){
	/* Следующий код выполняется только после загрузки DOM */
	
	/* Данный флаг предотвращает отправку нескольких комментариев: */
	var working = false;
	
	/* Ловим событие отправки формы: */
	$('#addCommentForm').submit(function(e){

 		e.preventDefault();
		if(working) return false;
		
		working = true;
		$('#submit').val('Занято...');
		$('span.error').remove();
		
		/* Отправляем поля формы в submit.php: */
		$.post('submit.php',$(this).serialize(),function(msg){

			working = false;
			$('#submit').val('Отправить');
			
			if(msg.status){

				/* 
				/	Если вставка была успешной, добавляем комментарий 
				/	ниже последнего на странице с эффектом slideDown
				/*/

				$(msg.html).hide().insertBefore('#addCommentContainer').slideDown();
				$('#body').val('');
			}
			else {

				/*
				/	Если есть ошибки, проходим циклом по объекту
				/	msg.errors и выводим их на страницу
				/*/
				
				$.each(msg.errors,function(k,v){
					$('label[for='+k+']').append('<span class="error">'+v+'</span>');
				});
			}
		},'json');

	});
	
});