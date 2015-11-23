(function($){
   	$(window).load(function(){
    	$(".cont2").mCustomScrollbar({
    		theme:"dark"
    	});
    });
})(jQuery);
$('.img_open_desc').click(function(){
	var src = $(this).attr('src2');
	var name = $(this).attr('name');
	var desc =$(this).attr('desc');
	var ves = $(this).attr('ves');
	$(".img_desc").attr("src",src); 
	$(".desc_name").text(name);
	$("#p_desc span").text(desc);
	$("#ves span").text(ves);
	$("#desc").show(); 
	return false;
});