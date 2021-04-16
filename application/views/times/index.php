<?php $this->load->view('partials/header') ?>
	<form action='<?php echo ('/surveys/process_form') ?>' method='post'>
		Your name: <input type='text' name='name'><br>
		Dojo Location: 
		<select name='dojo_location'>
			<option value='Mountain View'>Mountain View</option>
			<option value='Seattle, WA'>Seattle, WA</option>	
		</select><br>
		Favorite Language:
		<select name='favorite_language'>
			<option value='JavaScript'>JavaScript</option>
			<option value='Java'>Java</option>
			<option value='PHP'>PHP</option>	
		</select><br>
		Comment (optional):<br><textarea rows="5" cols="40" name="comment"></textarea><br>
		<input type='submit'>
	</form>
<?php $this->load->view('partials/footer') ?>