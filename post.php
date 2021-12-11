<?php include 'inc/header.php'; ?>
<?php  
 if (!isset($_GET['id'])  || $_GET['id'] == NULL) {
	header("Location: 404.php");
 }else {
   $id = $_GET['id'];
 }
?>
<div class="contentsection contemplete clear">
	<div class="maincontent clear">
		<div class="about">
<?php
$query = "SELECT * FROM tbl_post where id='$id'";
   $post = $db->select($query);
   if ($post) {
	   while($result = $post->fetch_assoc()) {
?>
<h2><?php echo $result['title'] ?></h2>
				
<h4><?php echo $fm->formaDate($result['date'] ) ?> By 
<a href="#"><?php echo $result['author'] ?></a></h4>

<img src="admin/upload/<?php echo $result['image']?>" alt="post image"> 
	
<p> <?php echo $fm->textShroten($result['body'] ) ?></p>
			
<?php  } } else { header("location:404.php"); } ?>
			 
				
<div class="relatedpost clear">
	<h2>Related articles</h2>
	<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
	<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
	<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
	<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
	<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
	<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
</div>
</div>

</div>


<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/footer.php';  ?>