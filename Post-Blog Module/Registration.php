
<?php 
	if(isset($_POST['submit']))
	{
	$name = $_POST['username'];
	$pword = $_POST['password'];
	setcookie('username', $name,time()+(60*60*24*30));
	setcookie('password',$pword,time()+(60*60*24*30));
									//60 seconds 60 minites 24 hrs 30days
									header('location:index.php');
	}
?>
<form method='post'>
<input type="text" name='username'>
<input type="password" name='password'>
<input type="submit" name="submit">
</form>