<div class="admin">
	<form method="POST" action="/menu/save/">
		<input type="text" name="id_cat" value="<?php echo $data['goods'][0][0]['id'] ?>" style="display:none">
		<p>
			<label>Name Goods</label>
			<input type="text"  name="name" value="<?php echo $data['goods'][0][0]['name'] ?>">
		</p>
		<p>
			<label>Description</label>
			<textarea name="desc">
				<?php echo $data['goods'][0][0]['desc'] ?>
			</textarea>
		</p>
		<p>
			<label>Price</label>
			<input type="text" name="price" value="<?php echo $data['goods'][0][0]['price'] ?>">
		</p>
		<p>
			<label>weight</label>
			<input type="text" name="weight" value="<?php echo $data['goods'][0][0]['weight'] ?>">
		</p>
		<p>
			<label>Mini Description</label>
			<textarea name="m_desc">
				<?php echo $data['goods'][0][0]['m_desc'] ?>
			</textarea>
		</p>
		<p>
			<label>Image</label>
			<input type="text" name="img" value="<?php echo $data['goods'][0][0]['img'] ?>">
		</p>
		<p>
			<label>Mini Image</label>
			<input type="text" name="m_img" value="<?php echo $data['goods'][0][0]['m_img'] ?>">
		</p>
		<p><input type="submit"></p>
	</form>
</div>