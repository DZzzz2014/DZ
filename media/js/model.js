$(function(){
var fx={/*создаем функцию создания модального окна. если сущестует мод окно - то возвращает функцию селектора модального окна*/
"initModel":function(){
	if($(".modal-window").length==0){
		$('<div>').attr('id','jquery-overlay').fadeIn(500).appendTo('body');
		return $('<div>'/*создали DIV*/).addClass('modal-window').appendTo('body');/*создали и рмстили пере классом боди*/
		}else{
			return $(".modal-window");
			}
	}
}

$('.products a').bind('click', function(e){/*.products a - все ссылки в продактс*/
e.preventDefault() /*стандартная JS функция, которая отменяет действия по умолчанию*/
data=$(this).attr('data_id');/*this - это текущий селектор по клику*/
modal=fx.initModel();/*console.log(data); console.log = print_r*/

$('<a>').attr('href','#').addClass('modal-close-btn').html('&times;').click(function(e){/*.html('&times') - метод добаляет текст к ссылке ; &times; = х*/
	e.preventDefault();
	modal.fadeOut(500, function(){/*медленно исчезает окно - modal.remove(); */
	$(this).remove();
	});
	$("#jquery-overlay").fadeOut(500, function(){/*$('#jquery-overlay').remove();	*/
	$(this).remove();
	});
	}).appendTo(modal);

$.ajax({
type:'POST',
url:'ajax.php', 
data:'id='+data, /* это тоже самое если бы на станицу ajax.phз написать $_POST['id']=data*/
success: function(d){/*если успешно сработал ajax.phз, то выводится в модальное окно*/
	modal.append(d);
	},
	error: function(){
	modal.append('tst');
	}
	/*beforeSend: function(){} используется если ожидается что ajax будет долго срабатывать - можно выводить часики или знак загрузки 
	;$('<img>').attr('src','путь к картинке') .appendTo(modal);	*/
})

});


});/*не писать ничего за этим ограничителем*/