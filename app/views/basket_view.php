<div class="basket_active" id="basket_active" style="">
	<p class="basket_t">Просмотр Вашего текущего заказа</p>
	<a href="<?php print $_SERVER['HTTP_REFERER']; ?>" class="c">
		<img src="./img/close.png" alt="">
		<p>Свернуть</p>
	</a>
	<div class="container">
		<?php 
			foreach ($data['goods'] as $key => $value) {
				printf('
			         <div class="basket_goods" id="good%s">
			          <a href="#" id="%s" class="delete"><div class="x"></div></a>
			          <img src="%s" alt="">
			          <div class="inf">
			            <p class="basket_name" style="font-size: 15px;">%s <br> <span style="font-size: 14px;">%s гр.</span></p> <br>
			            <p class="desc_asket" style="font-size: 12px;">%s</p>
			          </div>
			         <p class="cost_2" id="cost%s"><span>%s %s</span> руб.</p>
			       </div>
			       <div style="clear: both"></div>
       			  ',$value["id"],$value["id"],$value["m_img"],$value["to_price"],$value["price"],$value["name"],$value["weight"],$value["desc"],$value["id"],1,$value["id"],$value["price"],$value["to_price"]);
			}
		 ?>
	</div>
	<div class="foot">
		<center><a href="#" class="checkout_2" id="checkout_2" >Оформить доставку</a></center>
		<p class="summ" id="sum">Итого <span>&nbsp;<?=$_SESSION['price']?></span> руб.</p>
		<p class="proc2" >Скидка <span>&nbsp;<?=$_SESSION['shere']?></span>%</p>
	</div>
</div>