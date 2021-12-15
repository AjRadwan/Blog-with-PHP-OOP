<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

 
<div class="grid_10">
<div class="box round first grid">
<h2>Category List</h2>
<div class="block">        
	<table class="data display datatable" id="example">
	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Category Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

<?php
  $query = "SELECT * FROM tbl_category  ORDER BY id DESC";
  $category = $db->select($query);
 if ($category) {
	 $i = 0;
	  while($data = $category->fetch_assoc()) {
      $i++;
?>
		<tr class="odd gradeX">
			<td><?php echo $i?></td>
			<td><?php echo $data['name']?></td>
			<td>
			<a href="editCat.php?catid=<?php echo $data['id']?>">Edit</a> ||
			<a onclick="return confirm('Do You Want To Delete this?')" href="delCat.php?delcat=<?php echo $data['id']?>">Delete</a></td>
		</tr>
	<?php }  }// end while loop  ?>
</tbody>
</table>
</div>
</div>
</div>


<script type="text/javascript">

$(document).ready(function () {
setupLeftMenu();

$('.datatable').dataTable();
setSidebarHeight();


});
</script>
<?php include 'inc/footer.php'?>
