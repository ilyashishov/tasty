<div class="cont3">
	<div class="basket_active" id="basket_active" style="">
		<p class="basket_t">Просмотр Вашего текущего заказа</p>
		<a href="<?php print $_SERVER['HTTP_REFERER']; ?>" class="c">
			<img src="./img/close.png" alt="">
			<p>Свернуть</p>
		</a>
	
	
		<center><a href="#" class="checkout_2" id="checkout_2" >Оформить доставку</a></center>
		<p class="summ" id="sum">Итого <span>&nbsp;<?=$_SESSION['price']?></span> руб.</p>
		<p class="proc2" >Скидка <span>&nbsp;<?=$_SESSION['shere']?></span>%</p>
	</div>
</div>