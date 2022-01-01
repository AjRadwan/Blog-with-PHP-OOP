<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">

<div class="box round first grid">
    <h2>Add User</h2>
    <div class="block copyblock"> 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $fm->validation($_POST['username']);
    $password = $fm->validation($_POST['password']);
    $role = $fm->validation($_POST['role']);

	$username = mysqli_real_escape_string($db->link, $username);
	$password = mysqli_real_escape_string($db->link, $password);
	$role = mysqli_real_escape_string($db->link, $role);

    if (empty($username) || empty($password) || empty($role)) {
      echo "<span class='error'>Filed Must Not be Empty!!</span>";
    } else {
        $query = "INSERT INTO tbl_user (username, password, role) VALUES ('$username', '$password', '$role')";
        $userInsert = $db->insert($query);
        if ($userInsert) {
            echo "<span class='success'>User aded Successfully!!</span>";    

 } else{
    echo "<span class='error'>Something went wrong Please try again !!</span>";

 }
    }
}
?>
<form action=""  method="POST" enctype="multipart/form">
     <table class="form">					
            <tr>
                <td> <label>Username</label> </td>
                <td>
                    <input type="text" name="username" placeholder="Enter User Name..." class="medium" />
                </td>
            </tr>
            <tr>
                <td> <label>Password</label> </td>
                <td>
                    <input type="text" name="password" placeholder="Enter User Pass..." class="medium" />
                </td>
            </tr>
            <tr>
                <td> <label>Assign Role</label> </td>
                <td>
                    <select name="role" id="select">
                        <option>Select User Role</option>
                        <option value="0">Admin</option>
                        <option value="1">Author</option>
                        <option value="2">Editor</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Create" />
                </td>
            </tr>
    </table>
</form>
    </div>
</div>
</div>
<?php include 'inc/footer.php';?>

