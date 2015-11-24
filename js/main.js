(function($){
   	$(window).load(function(){
    	$(".cont2").mCustomScrollbar({
    		theme:"dark"
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

$(document).on('click', '.add_good', function(){
	$.ajax({
		url: '/basket/add',
		type: 'post',
		data: {id : $(this).attr('id')},
		success: function (data) {
			concole.log(data);
		}
	});
	return false;
});