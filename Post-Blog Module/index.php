<style>
table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
<?php

echo "<table>
  <tr>
    <td><img src='http://www.operationspecialdelivery.com/myspace-icon_small.png' height='50'>Example Username Variable</td>
		<th>Hey Pete, i wont be able to make that even tonight, my regards, please tell me how it goes!</th>
			

			
  </tr>
  <tr>
			<td><img src='http://images.all-free-download.com/images/graphiclarge/man_silhouette_clip_art_9510.jpg' height='50'>User 2 variable
			<th>Hey Matt!, i'll do just that, sorry you couldn't come out! You're missing out on all the fun!</th>
			</td>
	</tr>

			
</table>";




?>
<h3>Login To Reply</h3>
<form method="post">
Username: <input type="text" name='username'><br>
Password: <input type="password" name='password'><br>



<input type ="text" name="comments">

</br>


<input type="submit" name='submit'>
</form>


<?php 
//http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete
//TO DO have user upload picture
//set isset statement <- toDO
$name = $_COOKIE['username'];
$comment = $_GET['comments'];
echo $comment;
	echo " <table><tr>".
			'<td>'.'<img src="http://images.all-free-download.com/images/graphiclarge/man_silhouette_clip_art_9510.jpg" height="50">'."$name"
			.'<th></th></td></tr></table>';

	if(isset($_POST['submit']))
	{
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	if($username == $_COOKIE['username'] && $password== $_COOKIE['password'])
	{
	echo "Login Successfully";
	//header('location:index.php');
	exit;
	}
	
	else 
	{
	echo "<span style='background-color:red'>Login Failed!</span>";
	}
	
	
	}
	

?>
