<?php require_once("templates/top.php"); 
if($_POST){
	//echo"<pre>";
	//print_r($_POST);
	//echo "</pre>";

	$error=array();
	$filterArr=array('');
	$error[]=(empty($_POST['email']))?'поле Email не заполнено':'';
	$error[]=(empty($_POST['password']))?'поле Password не заполнено':'';

	
	$query="SELECT * FROM registration WHERE email='".$_POST['email']."'";
	//echo $query;
	$cat=mysqli_query($dbcnx, $query);
		if(!$cat){
			exit($query);
			}
		if(mysqli_num_rows($cat)==0){
		$error[0]='такой пользователь не зарегистрирован';
		}else{		
			$query="SELECT * FROM registration WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
			//echo $query;
			$cat=mysqli_query($dbcnx, $query);
			if(!$cat){
				exit($query);
				}
			if(mysqli_num_rows($cat)==0){
				$error[0]='проверьте вводимые учетные данные';
				}	
			}
	
	$errors=array_diff($error,$filterArr);
	if(!empty($errors)){
		foreach($errors as $err){
			echo"<span class='error' style='color:red'>";
			echo $err;
			echo"</span><br/>";
		}
	}else{
		echo'OK';		
	}
}
	//echo"<pre>";
	//print_r($errors);
	//echo"</pre>";


?>

<form action="auth.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-8">
      <input name="email" type="email" value='<?=(isset($_POST['email']))? $_POST['email']:'' ?>' class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-8">
      <input name="password" type="password" value='<?=(isset($_POST['pasword']))? $_POST['password']:''?>' class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-default">ВХОД</button>
    </div>
  </div>
</form>

<?php require_once("templates/bottom.php");   ?>