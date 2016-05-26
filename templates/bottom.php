</div>
			
		<div class=col-md-2>
		<?php if($_SESSION['id']){
		?>
		<br><a href="cabinet.php">Кабинет пользователя</a>
		<br><a href="logout.php">Выход</a>
		<?php
		}else{
		?>
			<a href="auth.php">вход</a>
			<p><a href="registration.php">регистрация</a></p>
		<?php
		}
		?>
		<div class=col-md-2>
			<h3>Реклама?</h3>
							
		</div>
					
					
		</div>
	</div>
<br style="clear:both"/>
	<footer class="footer">
		&copy; mcdd@mai.ru
		
		<img src="/media/img/dz_400.png" style="width:22px;height:22px;object-fit:cover;">
		</img>
	</footer>
	</body>
</html>