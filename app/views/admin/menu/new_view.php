<div class="admin">
	<form method="POST" action="/menu/create/">
		<input type="text" name="id_cat" value='<?php echo $url[4]; ?>' style="display:none">
		<p>
			<label>Name Goods</label>
			<input type="text"  name="name">
		</p>
		<p>
			<label>Description</label>
			<textarea name="desc"></textarea>
		</p>
		<p>
			<label>Price</label>
			<input type="text" name="price">
		</p>
		<p>
			<label>weight</label>
			<input type="text" name="weight">
		</p>
		<p>
			<label>Mini Description</label>
			<textarea name="m_desc"></textarea>
		</p>
		<p>
			<label>Image</label>
			<input type="text" name="img">
		</p>
		<p>
			<label>Mini Image</label>
			<input type="text" name="m_img">
		</p>
		<p><input type="submit"></p>
	</form>
</div>
