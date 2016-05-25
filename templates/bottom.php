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
			<h3>Погода</h3>
					<!--pogoda.by-->
					
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