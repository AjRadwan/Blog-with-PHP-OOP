<?php
 include 'inc/header.php';
 include 'inc/slider.php';
 include 'lib/Database.php';
 include 'config/config.php';
 include 'helpers/Format.php';
?>

<?php
$db = new Database();
$fm = new Format();
?>

<div class="contentsection contemplete clear">
<div class="maincontent clear">
<?php
   $query = "SELECT * FROM tbl_post LIMIT 3";
   $post = $db->select($query);
    if($post){
    while($result = $post->fetch_assoc()){
?>
<div class="samepost clear">
	<h2><a href="post.php?id=<?php echo $result['id'] ?>">
	<?php echo $result['title'] ?></a></h2>
	<h4><?php echo $fm->formaDate($result['date'] ) ?> By 
		<a href="#"><?php echo $result['author'] ?></a></h4>

		<a href="#"><img src="admin/upload/<?php echo $result['image']?>" alt="post image"/></a>

		<p> <?php echo $fm->textShroten($result['body'] ) ?></p>

		<div class="readmore clear">
			<a href="post.php?id=<?php echo $result['id'] ?>">Read More</a>
		</div>
</div>

 <?php }  ?> <!--end while loop -->

 <!-- pagination -->
 <?php echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>" ?>
 1, 2, 3
 <?php echo "<a href='index.php?page=1'>".'Last Page'."</a></span>" ?>

<?php } else { header("location:404.php"); } ?>
</div>

<?php include 'inc/sidebar.php' ?>
<?php include 'inc/footer.php' ?>