<?php echo form_open($action) ;?>

	
<fieldset id="test">

<legend>Content Editor</legend>
<ul>

	<li>	
		<label for="title">Title</label>
		<input id="title" name="title" type="text" id="title" maxlength="230" value="<?php echo $title; ?>" />
	</li>

	<li>
		<label for="content">Content</label>
		<textarea id="blog-content" name="content" cols="50" rows="10" ><?php echo $content; ?></textarea>	
	</li>

	<li>
		<input type="submit" name="submit" value="Submit"  />
	</li>

</ul>
</fieldset>
</form>