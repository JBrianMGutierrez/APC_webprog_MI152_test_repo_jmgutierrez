<form>
<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Nickname</th>
		<th>Email</th>
		<th>Home Address</th>
		<th>Comment</th>
		<th>Gender</th>
		<th>Cellphone</th>
		<th>Actions</th>
    </tr>
	<?php foreach($myinput2 as $m){ ?>
    <tr>
		<td><?php echo $m['id']; ?></td>
		<td><?php echo $m['name']; ?></td>
		<td><?php echo $m['nickname']; ?></td>
		<td><?php echo $m['email']; ?></td>
		<td><?php echo $m['home_address']; ?></td>
		<td><?php echo $m['comment']; ?></td>
		<td><?php echo $m['gender']; ?></td>
		<td><?php echo $m['cellphone']; ?></td>
		<td>
            <a href="<?php echo site_url('myform_controller/edit/'.$m['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('myform_controller/remove/'.$m['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
</form>