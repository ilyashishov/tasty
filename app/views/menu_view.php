<div class="cont" style="margin-left: 15px; width: 730px;overflow: hidden;">
	<!-- DESC -->
	<div class="desc" id="desc">
		<div class="desc_block">
			<a href="#" class="desc_close" ><img src="./img/desc_close.png" alt=""></a>
			<div style="clear: both"></div>
			<center>
				<img src="./img/menu/rolly1/Kalifornija_s_lososem.png" class="img_desc" alt="">
			</center> 
			<p class="desc_name" id="desc_name">Name</p>          
			<p class="p_desc" id="p_desc">Состав: <span></span></p>
			<p class="ves" id="ves">Вес: <span></span> г.</p>
		</div>
	</div> 
	<!-- DESC -->
	<div class="cont2">
		<?php 
			
			foreach ($data['goods'][0] as $key) {
				$edit = '<a  href="/menu/edit/id/'.$key["id"].'" class="lsf symbol edit-icon" style="font-size: 30px;">edit</a>';
				$delete = '<a  href="/menu/delete/id/'.$key["id"].'" class="lsf symbol delete-icon" style="font-size: 30px;">delete</a>'
				printf('
						<div class="block">'.$edit.'
							<div class="open_desc">
								<a href="#" class="img_open_desc" src2="%s" name="%s" desc="%s" ves="%s" ><img  style="width:34px;height:34px;" src="/img/open_desc.png" alt=""></a>
							</div>
							<img src="%s" alt="">
							<div class="number" id="number%s" style="display: none;">
								<!-- value="<?php echo $prow->quantity ?>" --> 
								<input type="text" title="" class="inputbox input-ultra-mini" size="3" maxlength="4" name="quantity"  value="1" />
								<a href="#" id_good="%s" price="%s"  class="plus" style="left:108px;top:49px" ><img src="/img/plus.png" style="width:14px;height:14px;" alt=""></a>
								<a href="#" id_good="%s" price="%s" class="minus"  style="left:35px;top:45px" ><img src="/img/minus.png" style="width:15px;height:5px;" alt=""></a>
							</div>
							<div class="b">
								<p class="weight">%s руб./%s г.</p>
								<p class="name">%s</p>
								<p class="m_desc">%s</p>
								<a href=""><div class="buy"></div></a>
								<a id="%s" buy="0" href="#" price="%s" class="add_good" onClick=a%s_onclick() ><div class="buy"></div></a>
							</div>
						</div>
						',$key["m_img"],$key["name"],$key["m_desc"],$key["weight"],$key["img"],$key["id"],$key["id"],$key["price_good"],$key["id_good"],$key["price"],$key["price"],$key["weight"],$key["name"],$key["desc"],$key["id"],$key["price"],$key["id"]);
			}
		 ?>
	</div>
</div>




<?php 

?>