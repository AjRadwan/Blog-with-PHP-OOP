<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<div class="grid_10">
<div class="box round first grid">
<h2>Inbox</h2>
<div class="block">        
<table class="data display datatable" id="example">
<thead>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>email</th>
		<th>body</th>
		<th>date</th>
		<th>action</th>
	</tr>
</thead>
<tbody>
<?php
  $query = "SELECT * FROM tbl_contact WHERE status='0'  ORDER BY id DESC";
  $msg = $db->select($query);
 if ($msg) {
	 $i = 0;
	  while($data = $msg->fetch_assoc()) {
      $i++;
?>
	<tr class="odd gradeX">
		<td><?php echo $i?></td>
		<th><?php echo $data['firstname'].' '.$data['lastname']?></th>
		<td><?php echo $data['email']?></td>
		<td><?php echo $fm->textShroten($data['body'],40)?></td>
		<td><?php echo $fm->formaDate($data['date'] )?></td>
	<td>
		<a href="viewmsg.php?msgid=<?php echo $data['id']?>">View</a> ||
	    <a href="replymsg.php?msgid=<?php echo $data['id']?>">Reply</a>
		<a href="?seenid=<?php echo $data['id']?>">Seen</a> ||
	</td>
	</tr>
	<?php } } ?>
</tbody>

</table>
</div>
</div>

<div class="box round first grid">
<h2>Seen Message</h2>
<div class="block">        
<table class="data display datatable" id="example">
<thead>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>email</th>
		<th>body</th>
		<th>date</th>
		<th>action</th>
	</tr>
</thead>
<tbody>
	<tr class="odd gradeX">
		<td>01</td>
		<td>name</td>
		<td>email</td>
		<td>body</td>
		<td>date</td>
		<td>
			<a href="">Delete</a> 
	 	</td>
	</tr>
</tbody>
</table>
</div>
</div>
</div>
<script>
$(document).ready(function () {
setupLeftMenu();

$('.datatable').dataTable();
setSidebarHeight();


});
</script>
<?php include 'inc/footer.php';?> 

