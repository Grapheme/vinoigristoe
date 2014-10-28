<?=form_open($this->uri->uri_string(),array('id'=>'contacts-form','name'=>'contacts-form')); ?>
	<legend>Feedback Form</legend>
	<div class="control-group">
		<label for="name">Your name</label>
		<input type="text" class="inpval" name="name" id="name" value="">
	</div>
	<div class="control-group">
		<label for="email">Email</label>
		<input type="text" class="inpval" name="email" id="email" value="">
	</div>
	<div class="control-group">
		<label for="phone">Phone</label>
		<input type="text" class="inpval" name="phone" id="phone" value="">
	</div>
	<div class="control-group">
		<label for="text">Comment or question?</label>
		<textarea class="inpval" name="text" id="text" rows="5"></textarea>
	</div>
	<div class="control-group">
		<button value="send" name="submit" id="submit" type="submit">Send</button>
	</div>
<?= form_close(); ?>