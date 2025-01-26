
$(document).ready(function () {

	// disparar_noti();
	
});

// function num_caracteres(campo,num)
// {
// 	var val = $('#'+campo).val();
// 	var cant = val.length;
// 	console.log(cant+'-'+num);

// 	if(cant>num)
// 	{
// 		$('#'+campo).val(val.substr(0,num));
// 		return false;
// 	}

// }



// function validar_session_activa() 
// {
// 	const id_empresa = localStorage.getItem('ID_EMPRESA');
// 	const empresa = localStorage.getItem('EMPRESA');
// 	const usuario = localStorage.getItem('USUARIO');
// 	const id_usuario = localStorage.getItem('ID_USUARIO');
	

// 	if(empresa==null || id_usuario==null)
// 	{
// 		window.location.href = 'view/login.html';
// 	}else
// 	{
// 		window.location.href = 'view/home.html';
// 	}
// }

// // function eliminar_session() 
// // {
// // 	// localStorage.clear();
// // 	localStorage.removeItem('ID_EMPRESA');
// // 	localStorage.removeItem('ID_USUARIO');
// // 	window.location.href = '../index.html';
// // }

// function leer()
// {
// 	    console.log(localStorage.getItem('INICIO'));
// 		console.log(localStorage.getItem('USUARIO'));
// 		console.log(localStorage.getItem('PASS'));
// }

function disparar_noti()
{
	// setInterval(notificaciones,10000);
	// notificaciones()
}

function notificaciones()
{
	var parametros = 
	{
		'empresa':localStorage.getItem('ID_EMPRESA'),
		'usuario':localStorage.getItem('ID_USUARIO'),
	}

    $.ajax({
        data:  {parametros:parametros},
        url:    url_link+'funciones.php?notificaciones=true',           
        type:  'post',
        dataType: 'json',
        success:  function (response) { 
            $('#pnl_aletas').html(response.noti); 
            $('#num_noti').text(response.num); 
        }
      });

}

function menu_lateral()
{
	var parametros = 
	{
		'empresa':em,
		'usuario':us,
	}

    $.ajax({
        data:  {parametros:parametros},
        url:    '../controlador/funcionesSistema.php?menu_lateral_empresa=true',           
        type:  'post',
        dataType: 'json',
        success:  function (response) { 
            $('#accordionSidebar').html(response); 
        }
      });

}

function codigo_secuencial(tipo='FA',campo='',texto=0,autorizacion='',texto2='',serie='',texto3=0)
{
	var parametros = 
	{
		'tipo':tipo,
	}
    $.ajax({
        data:  {parametros:parametros},
        url:    '../controlador/funcionesSistema.php?buscar_codigo_secuencial=true',           
        type:  'post',
        dataType: 'json',
        success:  function (response) { 
            console.log(response);
        	if(texto==0)
        	{
               if(campo!='')
               {
                    $('#'+campo).val(response.numero);
               }
        	}else
        	{
                if(campo!='')
                {
        		  $('#'+campo).text(response.numero);   
                }     		
        	}
            if(texto2==0)
            {
                if(autorizacion!='')
                {
                    $('#'+autorizacion).val(response.autorizacion);
                }
            }else
            {
                if(autorizacion!='')
                {
                    $('#'+autorizacion).text(response.autorizacion);  
                }              
            }
            
        lista_series(tipo,serie);
        } 
      });

}

function lista_series(tipo,campo)
{
    actual = $('#'+campo).text();
    console.log(actual);
    var parametros = 
    {
        'tipo':tipo,
    }
    $.ajax({
        data:  {parametros:parametros},
        url:    '../controlador/funcionesSistema.php?lista_series=true',           
        type:  'post',
        dataType: 'json',
        success:  function (response) { 
            console.log(response)
            var option = '';
            response.forEach(function(item,i){
                if(item.Serie!=actual)
                {
                    option+='<button type="button" class="dropdown-item" onclick="cambio_serie(\''+tipo+'\',\''+item.Serie+'\',)">'+item.Serie+'</button>';
                }
            
            })
            // console.log(option)
            $('#opciones').html(option);
            console.log(response);           
        }
      });

}
