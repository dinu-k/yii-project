<div class="col-lg-12">
<h1 class="col-lg-8" style="color:#fff;">Posts</h1>
<h2 class="col-lg-4"><a href="<?php echo Yii::app()->homeUrl;?>/administrator/createpost"><i class="fa fa-plus fa-2"></i> Add Post</a></h2>
</div>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Created Date</th>
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
			<td><?php echo $value->title; ?></td>
			<td><?php echo $value->description; ?></td>
			<td><?php echo $value->created_date; ?></td>
			<td>
				<a href="<?php echo Yii::app()->homeUrl;?>/administrator/updatepost/<?php echo $value->id;?>"><i class="fa fa-fw fa-edit"></i></a>
				<a href="<?php echo Yii::app()->homeUrl;?>/administrator/deletepost/<?php echo $value->id;?>"><i class="fa fa-times fa-1"></i></a>
			</td>
		</tr>
		<?php # code...
		}  ?>
	</tbody>
</table>
