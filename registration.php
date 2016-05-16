<?php require_once("templates/top.php"); 
if($_POST){
	//echo"<pre>";
	//print_r($_POST);
	//echo "</pre>";

	$error=array();
	$filterArr=array('');
	$error[]=(empty($_POST['name']))?'поле Name не заполнено':'';
	$error[]=(empty($_POST['email']))?'поле Email не заполнено':'';
	$error[]=(empty($_POST['password']))?'поле Password не заполнено':'';
	$error[]=(empty($_POST['repeat_password']))?'поле Repeat Password не заполнено':'';
	
	if($_POST['password']!=$_POST['repeat_password'])
		{
		$error[]='Пароль не совпадает';
		}
	
	$query="SELECT * FROM registration WHERE email='".$_POST['email']."'";
	$cat=mysqli_query($dbcnx, $query);
		if(!$cat){
			exit($query);
			}
		if(mysqli_num_rows($cat)>0){
		$error[]='такой Email уже используется';
		}
	
	$errors=array_diff($error,$filterArr);
	if(!empty($errors)){
		foreach($errors as $err){
			echo"<span class='error' style='color:red'>";
			echo $err;
			echo"</span><br/>";
		}
	}else{
		//echo'OK';
		$query="INSERT INTO registration VALUES(Null,
		'".$_POST['email']."',
		'".$_POST['password']."',
		'".$_POST['repeat_password']."',
		'".$_POST['name']."',
		'unblock',
		NOW(),
		NOW())";
		
		$cat=mysqli_query($dbcnx, $query);
		if(!$cat){
			exit($query);
			}
		
		?>
		<script>
			document.location.href='index.php';
		</script>
		<?		
	}
}
	//echo"<pre>";
	//print_r($errors);
	//echo"</pre>";


?>


<form action="registration.php" method="post">
 
  <div class="form-group" >
	<label for="exampleInputEmail1">Email address</label>
	<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  
  <div class="form-group" >
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
   <div class="form-group" >
    <label for="exampleInputPassword1">Repeat Password</label>
    <input name="repeat_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="form-group" >
    <label for="exampleInputPassword1">Name</label>
    <input name="name" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php require_once("templates/bottom.php");   ?>