<div class="basket_active" id="basket_active" style="">
	<p class="basket_t">Просмотр Вашего текущего заказа</p>
	<a href="<?php print $_SERVER['HTTP_REFERER']; ?>" class="c">
		<img src="./img/close.png" alt="">
		<p>Свернуть</p>
	</a>
	<div class="container">
		<?php 
		print_r($data);
			foreach ($data['goods'] as $key => $value) {
				printf('
			         <div class="basket_goods" id="good%s">
			          <a href="#" id="%s" class="delete"><div class="x"></div></a>
			          <img src="%s" alt="">
			          <div class="inf">
			            <p class="basket_cost" style="font-size: 14px;">%s руб.</p>
			            <p class="basket_name" style="font-size: 15px;">%s <br> <span style="font-size: 14px;">%s гр.</span></p> <br>
			            <p class="desc_asket" style="font-size: 12px;">%s</p>
			          </div>
			          <div class="number_2" id="number%s" style="">
			           <input type="text" title="" class="inputbox input-ultra-mini" size="3" maxlength="4" name="quantity"  value="%s" />
			           <a href="#" id_good="%s" price="%s"  class="plus" style="left:40px;top:25px" ><img src="/img/plus.png" style="width:14px;height:14px;" alt=""></a>
			           <a href="#" id_good="%s" price="%s" class="minus"  style="left:-25px;top:30px" ><img src="/img/minus.png" style="width:15px;height:5px;" alt=""></a>
			         </div>
			         <p class="cost_2" id="cost%s"><span>%s</span> руб.</p>
			       </div>
			       <div style="clear: both"></div>
       			  ',$key["id"],$key["id"],$key["m_img"],$key["price"],$key["name"],$key["weight"],$key["desc"],$key["id"],1,$key["id"],$key["price"] ,$key["id"],$key["price"],$key["id"],$key["price"]);
			}
		 ?>
	</div>
	<div class="foot">
		<center><a href="#" class="checkout_2" id="checkout_2" >Оформить доставку</a></center>
		<p class="summ" id="sum">Итого <span>&nbsp;<?=$_SESSION['price']?></span> руб.</p>
		<p class="proc2" >Скидка <span>&nbsp;<?=$_SESSION['shere']?></span>%</p>
	</div>
</div>