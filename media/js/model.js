$(function(){
var fx={/*������� ������� �������� ���������� ����. ���� ��������� ��� ���� - �� ���������� ������� ��������� ���������� ����*/
"initModel":function(){
	if($(".modal-window").length==0){
		$('<div>').attr('id','jquery-overlay').fadeIn(500).appendTo('body');
		return $('<div>'/*������� DIV*/).addClass('modal-window').appendTo('body');/*������� � ������� ���� ������� ����*/
		}else{
			return $(".modal-window");
			}
	}
}

$('.products a').bind('click', function(e){/*.products a - ��� ������ � ��������*/
e.preventDefault() /*����������� JS �������, ������� �������� �������� �� ���������*/
data=$(this).attr('data_id');/*this - ��� ������� �������� �� �����*/
modal=fx.initModel();/*console.log(data); console.log = print_r*/

$('<a>').attr('href','#').addClass('modal-close-btn').html('&times;').click(function(e){/*.html('&times') - ����� �������� ����� � ������ ; &times; = �*/
	e.preventDefault();
	modal.fadeOut(500, function(){/*�������� �������� ���� - modal.remove(); */
	$(this).remove();
	});
	$("#jquery-overlay").fadeOut(500, function(){/*$('#jquery-overlay').remove();	*/
	$(this).remove();
	});
	}).appendTo(modal);

$.ajax({
type:'POST',
url:'ajax.php', 
data:'id='+data, /* ��� ���� ����� ���� �� �� ������� ajax.ph� �������� $_POST['id']=data*/
success: function(d){/*���� ������� �������� ajax.ph�, �� ��������� � ��������� ����*/
	modal.append(d);
	},
	error: function(){
	modal.append('tst');
	}
	/*beforeSend: function(){} ������������ ���� ��������� ��� ajax ����� ����� ����������� - ����� �������� ������ ��� ���� �������� 
	;$('<img>').attr('src','���� � ��������') .appendTo(modal);	*/
})

});


});/*�� ������ ������ �� ���� �������������*/