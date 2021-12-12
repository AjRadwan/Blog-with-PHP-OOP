<div class="sidebar clear">
<div class="samesidebar clear">
	<h2>Categories</h2>
<?php
 
$query = "SELECT * FROM tbl_category";
   $category = $db->select($query);
   if ($category) {
	   while($result = $category->fetch_assoc()) {
 
?>
<ul>
	<li><a href="posts.php?category=<?php echo $result['id'] ?>"><?php echo $result['name']; ?></a></li>

	<?php } } else { ?>		
		<li>NO Releted Categories</li>	
	<?php } ?>		
</ul>
</div>

<div class="samesidebar clear">
	<h2>Latest articles</h2>
		<div class="popular clear">
			<h3><a href="#">Post title will be go here..</a></h3>
			<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
			<p>Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.</p>	
		</div>
		
	
</div>

</div>