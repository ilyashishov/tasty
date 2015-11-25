
<div style="background:none;padding:0px;margin:-655px auto;width:940px;">
	<div class="basket_active" id="basket_active_2"> 
		<p class="basket_t">Оставьте контактные данные</p>
		<a href="#" class="c" id="c_2">
			<img src="/img/close.png" alt="">
			<p>Свернуть</p>
		</a>
		<form action="/basket/sendmail" method="post">
			<p>Ваше ИМЯ </p><input type="text" name="name" required  class="user">
			<p>Телефон </p><input type="text" name="tel" required  class="user">
			<p>Улица </p><input type="text" name="ul" class="user">
			<p>Подъезд </p><input type="text" name="pod" class="user">
			<p>Этаж </p><input type="text" name="et" class="user">
			<p>Квартира</p><input type="text" name="kv" class="user">
			<p >Пожелания</p><input  name="po" type="text" class="user">
			<input type="submit" class="submit" value="Подтвердить заказ">
			<p >
				<input value="<?=$_SESSION['shere']?>" id="sum1" name="sum" type="text" class="user" style="display:none ">
			</p>
			<input value="<?=$_SESSION['price']?>" id="proc" name="proc" type="text" class="user" style="display:none">
		</form>
	</div>
</div>
