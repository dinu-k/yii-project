<h1 style="color:#fff;">Users</h1>
<table class="table">
	<thead>
		<tr>
			<th>User Id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Create Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		//print_r($data);
		foreach ($data as $key => $value) {
			?>
		<tr>
			<td><?php echo $value->id; ?></td>
			<td><?php echo $value->username; ?></td>
			<td><?php echo $value->email; ?></td>
			<td><?php echo $value->create_time; ?></td>
			<td>
				<a href="<?php echo Yii::app()->homeUrl;?>/administrator/update/<?php echo $value->id;?>"><i class="fa fa-fw fa-edit"></i></a>
				<a href="<?php echo Yii::app()->homeUrl;?>/administrator/delete/<?php echo $value->id;?>"><i class="fa fa-times fa-1"></i></a>
			</td>
		</tr>
		<?php # code...
		}  ?>
	</tbody>
</table>
