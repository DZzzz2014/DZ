</div>
			
	<div class="col-md-2 side_menu">
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
			<!--<div class="col-md-2">
				<h3>Реклама?</h3>									
			</div>	-->
<!-- Корзинка -->
<div id="basket">
<table>
<tbody>
<tr style="display: none;" class="hPb">
<td>Выбрано:</td>
<td><span id="totalGoods">0</span> товаров</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Сумма: &asymp; </td>
<td><span id="totalPrice">0</span> руб.</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Куки:</td>
<td><span id="gugu">0</span> </td>
</tr>
<tr style="display: table-row;" class="hPe">
<td colspan="2">Корзина пуста</td>
</tr>
<tr>
<td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
<td><a style="display: none;" id="checkOut" href="#">Оформить</a></td>
</tr>
</tbody>
</table>
</div>

<style>
#clearBasket, #checkOut {
 display: none;
}
.hPb {
    display: none;
}
</style>
	</div>
</main>	
<br style="clear:both"/>

	<footer class="footer">
		<img src="/media/img/dz_400.png" style="width:22px;height:22px;object-fit:cover;">		</img> &copy; mcdd@mai.ru  +375-29-6082988 
	</footer>
	</body>
</html>