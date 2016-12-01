<?php echo validation_errors(); ?>

<?php echo form_open('myform_controller/add'); ?>

	<div>Name : <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" /></div>
	<div>Nickname : <input type="text" name="nickname" value="<?php echo $this->input->post('nickname'); ?>" /></div>
	<div>Email : <input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" /></div>
	<div>Home Address : <input type="text" name="home_address" value="<?php echo $this->input->post('home_address'); ?>" /></div>
	<div>Comment : <textarea name="comment"><?php echo $this->input->post('comment'); ?></textarea></div>
	<div>Gender : <input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" /></div>
	<div>Cellphone : <input type="text" name="cellphone" value="<?php echo $this->input->post('cellphone'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>