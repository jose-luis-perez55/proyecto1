<?
// Para desactivar plugins como maps, analitycs, captcha, etc. en la web, introducir el siguiente código para verificar que las cookies estan aceptadas:
//if(isset($_COOKIE['ac_t']) && $_COOKIE['ac_t'] == '1'){
// ac_t = cookies de terceros
// ac_a = cookies analiticas

$url_web = $_SERVER['SERVER_NAME'];
//*************************************************************************************************//
//*********************************//
// CONFIGURACIÓN DE COOKIES
// Indicar 1/0 (si/no) en $vis_ de cada una de las cookies que existan en la web
//*********************************//
//COOKIES NECESARIAS (Siempre en 1)
	$vis_phpsessid = 1;	// cookie PHPSESSID 
	$vis_cookies = 1;	// cookie aceptacion cookie
	$tot_coo_nec = 1; // 1 = SI, si hay mínimo 1 cookie de las necearias
//COOKIES ANALÍTICAS
	$vis_google_analitycs = 1; // coockies de Google Analytics
	$tot_coo_ana = 1; // 1 = SI, si hay mínimo 1 cookie de las analíticas
//COOKIES DE TERCEROS
	$vis_twitter = 0; // Compartir en twitter
	$vis_google_maps = 0; // Mostrar mapa de googlemaps
	$vis_google_capt = 0; // Uso de recaptcha de google
	$vis_google_tran = 0; // Uso de google translate para traducir la web
	$vis_tour = 1; // Uso de Tour virtual TourMake
	$tot_coo_ter = 1; // 1 = SI, si hay mínimo 1 cookie de las de terceros
//*********************************//
//ENLACES DE INTERÉS
//Modificar 'pol_cookies' con el enlace de la web
//*********************************//
	$pol_cookies = 'politica-cookies';
	$pol_coo_goo = 'https://policies.google.com/technologies/cookies?hl=es'; // Política de cookies de google
	$pol_coo_twi = 'https://help.twitter.com/es/rules-and-policies/twitter-cookies'; // Política de cookies de twitter
//*********************************//
//*************************************************************************************************//
	
	
	
//*********************************//
// DATOS A MOSTRAR DE LAS COOKIES
// No modificar este código
//*********************************//
// Textos de cookies necesarias tanto para el aviso ($txt_) como para la política ($pol_)
	$txt_phpsessid = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Propia de '.$url_web.'. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_cookies.'"><small>Política de cookies de '.$url_web.'</small></a></td>
		</tr>
		<tr>
			<td>PHPSESSID</td>
			<td>Esta cookie es nativa de PHP y permite a la web guardar datos serializados de estado. En esta web se usa para establecer sesiones de usuario pasando datos de estado a través de una cookie temporal también conocida como Cookie de sesión. La cookie PHPSESSID no tiene caducidad establecida ya que desaparece cuando se cierra la web.</td>
			<td>Session</td><td>HTML</td>
		</tr>
	';
	$txt_cookies = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Propia de '.$url_web.'. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_cookies.'"><small>Política de cookies de '.$url_web.'</small></a></td>
		</tr>
		<tr>
			<td>acookie</td>
			<td>Esta cookie almacena la configuración de cookies seleccionada por el usuario para su uso en la web (activando/desactivando los distintos tipos de cookies)</td>
			<td>30 días</td><td>HTML</td>
		</tr>
		<tr>
			<td>ac_a</td>
			<td>Esta cookie almacena la configuración (activación/desactivación) de cookies seleccionada por el usuario para las aplicaciones analíticas existentes en la web.</td>
			<td>30 días</td><td>HTML</td>
		</tr>
		<tr>
			<td>ac_t</td>
			<td>Esta cookie almacena la configuración (activación/desactivación) de cookies seleccionada por el usuario para las aplicaciones de terceros existentes en la web.</td>
			<td>30 días</td><td>HTML</td>
		</tr>
	';
// Textos de cookies analíticas tanto para el aviso ($txt_) como para la política ($pol_)
	// Si se ha implementado Google Analytics mediante Google Tag Manager, esta cookie (_gat) se llamará _dc_gtm_<property-id>
	$txt_google_ana = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Google Analitycs. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_coo_goo.'"><small>Política de cookies de Google</small></a></td>
		</tr>
		<tr>
			<td>_ga</td>
			<td>Se usa para distinguir a los usuarios.</td>
			<td>2 años</td><td>HTML</td>
		</tr>
		<tr>
			<td>_gid</td>
			<td>Se usa para distinguir a los usuarios.</td>
			<td>24 horas</td><td>HTML</td>
		</tr>
		<tr>
			<td>_gat_gtag_UA_117396304_1</td>
			<td>Se usa para limitar el porcentaje de solicitudes.</td>
			<td>1 minuto</td><td>HTML</td>
		</tr>
	';
// Textos de cookies de terceros tanto para el aviso ($txt_) como para la política ($pol_)
	$txt_twitter_ter = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Twitter, compartir páginas de esta web en la red social. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_coo_twi.'"><small>Política de cookies de Twitter</small></a></td>
		</tr>
		<tr>
			<td>_ga</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Permitir a los usuarios compartir contenido de nuestro sitio web.</td>
			<td>Session</td><td>HTML</td>
		</tr>
		<tr>
			<td>_twitter_sess</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Inicio de sesión en twitter.</td>
			<td>Session</td><td>HTML</td>
		</tr>
		<tr>
			<td>external_referer</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Twitter utiliza estas cookies de agregar el uso de botones.</td>
			<td>7 días</td><td>HTML</td>
		</tr>
		<tr>
			<td>gt</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Cookie instalado por Twitter.</td>
			<td>1 hora</td><td>HTML</td>
		</tr>
		<tr>
			<td>ct0</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Permite ubicar en la página funcionalidades de Twitter, y compartir la información del sitio web en la red social Twitter</td>
			<td>5 horas</td><td>HTML</td>
		</tr>
		<tr>
			<td>_gid</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Se usa para distinguir a los usuarios.</td>
			<td>24 horas</td><td>HTML</td>
		</tr>
		<tr>
			<td>guest_id</td>
			<td>Cookie de Twitter que usa cuando ponemos el botón Tweet para compartir contenidos en la web. Sirve para reconocer si el usuario es usuario de esta red social. sirve para reconocer si el usuario es usuario de esta red social.</td>
			<td>2 años</td><td>HTML</td>
		</tr>
		<tr>
			<td>personalization_id</td>
			<td>Se establece cuando se utiliza el botón Tweet en nuestras páginas. Cookie continua instalado por Twitter.</td>
			<td>2 años</td><td>HTML</td>
		</tr>
	';
	$txt_google_maps = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Visualizar Google Maps y uso de Google recaptcha (formularios web) en esta web. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_coo_goo.'"><small>Política de cookies de Google</small></a></td>
		</tr>
		<tr>
			<td>NID</td>
			<td>Visualización de mapas mediante Google Maps y herramienta recaptcha (formularios web)</td>
			<td>6 meses</td><td>HTML</td>
		</tr>
		<tr>
			<td>CONSENT</td>
			<td>Cookie técnica para controlar la aceptación de cookies de Google Maps.</td>
			<td>permanente</td><td>HTML</td>
		</tr>
	';
	$txt_google_tran = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Almacena el idioma de la web seleccionado por el usuario para su uso por google translate. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_coo_goo.'"><small>Política de cookies de Google</small></a></td>
		</tr>
		<tr>
			<td>googtrans</td>
			<td>Almacena el idioma de la web seleccionado por el usuario para su uso por google translate.</td>
			<td>Session</td><td>HTML</td>
		</tr>
	';
	$txt_tour = '
		<tr class="table-active">
			<td colspan="4">Aplicación: Visualizar Google Tourmake en esta web. <a class="float-right btn btn-sm btn-secondary" target="_blank" href="'.$pol_coo_goo.'"><small>Política de cookies de Google</small></a></td>
		</tr>
		<tr>
			<td>1P_JAR</td>
			<td>Transfiere datos a Google</td>
			<td>1 semana</td><td>HTML</td>
		</tr>
		<tr>
			<td>CONSENT</td>
			<td>Cookie técnica para controlar la aceptación de cookies de Google Tourmake.</td>
			<td>permanente</td><td>HTML</td>
		</tr>
		<tr>
			<td>SID, NID, HSID, APISID, LOGIN_INFO, SAPISID,PREF,YSC,VISITOR_INFO1_LIVE</td>
			<td>Cookies implementadas por Google en cualquier página que incluye un vídeo de Youtube. Se usan para medir el número y el comportamiento de los usuarios de YouTube, incluyendo la información que vincula las visitas a nuestro Sitio Web con su cuenta de Google en caso de tenerla activa. La información sobre el uso en nuestra web, incluyendo la dirección IP del usuario, puede ser transmitida a Google y almacenada en sus servidores.</td>
			<td></td><td>HTML</td>
		</tr>
	';
//************************************************
// CREACIÓN DE TEXTO PARA LA POLÍTICA DE COOKIES
// No modificar este código
// En la política de cookies simplemente hay que añadir la variable $tipos_cookies
//************************************************
$tipos_cookies = '
	<table class="table txt-cookies">
		<thead>
			<tr class="bg-secondary text-dark">
				<th scope="col">Cookie</th>
				<th scope="col">Próposito</th>
				<th scope="col">Caducidad</th>
				<th scope="col">Tipo</th>
			</tr>
		</thead>
		<tbody>
';
// $tipos_cookies => para el texto de política de cookies
// $avi_coo_nec => para el aviso emergente de cookies
if($tot_coo_nec == '1'){
	$tipos_cookies .= $avi_coo_nec = '<tr class="bg-dark text-white"><td colspan="4">COOKIES NECESARIAS</td></tr>';
	if($vis_phpsessid == '1'){$tipos_cookies .= $txt_phpsessid; $avi_coo_nec .= $txt_phpsessid;}
	if($vis_cookies == '1'){$tipos_cookies .= $txt_cookies; $avi_coo_nec .= $txt_cookies;}
}
// $avi_coo_ana => para el aviso emergente de cookies
if($tot_coo_ana == '1'){
	$tipos_cookies .= $avi_coo_ana = '<tr class="bg-dark text-white"><td colspan="4">COOKIES ANALÍTICAS</td></tr>';
	if($vis_google_analitycs == '1'){$tipos_cookies .= $txt_google_ana; $avi_coo_ana .= $txt_google_ana;}
}
// $avi_coo_ter => para el aviso emergente de cookies
if($tot_coo_ter == '1'){
	$tipos_cookies .= $avi_coo_ter = '<tr class="bg-dark text-white"><td colspan="4">COOKIES DE TERCEROS</td></tr>';
	if($vis_twitter == '1'){$tipos_cookies .= $txt_twitter_ter; $avi_coo_ter .= $txt_twitter_ter;}
	if($vis_google_maps == '1' || $vis_google_capt == '1'){$tipos_cookies .= $txt_google_maps; $avi_coo_ter .= $txt_google_maps;}
	if($vis_google_tran == '1'){$tipos_cookies .= $txt_google_tran; $avi_coo_ter .= $txt_google_tran;}
	if($vis_tour == '1'){$tipos_cookies .= $txt_tour; $avi_coo_ter .= $txt_tour;}
}
$tipos_cookies .= '
		</tbody>
	</table>
';
?>
<style>
	#cookies_ocu p{
		color:#333;
		margin-bottom:0px;
	}
	.cookies_ocu a{
		font-size:13px;
	}
	.btn{
		background:#ccc;
		border-radius:3px;
		color:#000;
		padding:3px;
	}
	.cerrar_msg{
		background:#C00;
		border-radius:3px;
		color:#fff;
		padding:3px;
	}
	.bg-secondary{
		background:#efefef;
		border-top:solid 1px #999;
	}
	.bg-white{
		background:#fff;
	}
	.bg-dark{
		background:#666;
	}
	.table-active td{
		background:#dfdfdf;
	}
	.txt-cookies{
		font-size:11px;
		line-height:15px;
		color:#333;
		padding: 0px 10px;
		max-height: 100%;
		overflow: auto;
	}
	.form-check{
		margin-left:10px;
		margin-right:10px;
		position:relative;
		float:left;
		/* border:solid 1px #ccc;
		border-radius:3px;
		padding:2px 4px 2px 4px; */
	}
	.form-check input{
		position:relative;
		margin:0;
	}
	.form-check label{
		padding-left:.5rem;
	}
	.border-bottom{
		border-bottom:solid 1px #ccc;
	}
	#inf_coo, .dis-none{
		display:none;
	}
	.cookies_ocu{
		position:fixed;
		bottom:0%;
		left:0px;
		border-radius: 0px 4px 0px 0px;
		border-top:solid 1px #999;
		border-right:solid 1px #999;
		padding: 0px 6px 0px 6px;
		z-index:199;
	}
	.cerrar_msg{
		right:0px;
		top: 0px;
		z-index:2001;
		line-height:1;
	}
	.fixed-bottom{
		position: fixed;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1030;
	}
	.float-left{
		float:left;
	}
	.padding{
		padding:8px;
	}
	.nav-tabs a, a.btn{
		color:#333;
	}
	#form_cookies, .inf_coo{
		position:relative;
		float:left;
		width:100%;
	}
	.text-white a, .text-white{
		color:#efefef;
	}
	.position-absolute{
		position: absolute;
	}
	.btn input{
		width:10px;
		height:10px;
	}
	.btn label, .btn input{
		position: relative;
    float: left;
    padding: 0px;
    margin: 0px;
	}
</style>
<div class="cookies_ocu bg-dark">
	<h4 class="py-1 mb-0"><u><small><a class="text-white" href="javascript:slidetog();">Uso de cookies</a></small></u></h6>
</div>
<div class="w-100 fixed-bottom bg-secondary txt-cookies">
	<?
	if(isset($_COOKIE['acookie']) && $_COOKIE['acookie'] == '1'){$disp = 'dis-none';}else{$disp = '';}
	?>
	<div id="cookies_ocu" class="row-fluid <?=$disp?>">
		<div class="position-absolute cerrar_msg btn btn-sm btn-danger p-1 py-0" onclick="javascript:slidetog();">X</div>
		<div class="span12"></div>
		<div class="span12 border-bottom">
			<p class="mb-1 pt-2">
				Las cookies que puede utilizar <b><?=$_SERVER['SERVER_NAME']?></b>:
				<br>
				• Cookies estrictamente necesarias como por ejemplo, aquellas que sirven para una correcta navegación y aseguran que el contenido de la página web se carga eficazmente.
				<br>
				• Cookies analíticas, son cookies utilizadas para el análisis, investigación o estadísticas con el fin de mejorar la experiencia del sitio web. Mediante el uso de estas cookies se puede mostrar información más relevante a los visitantes.
				<br>
				• Cookies de terceros como por ejemplo, las usadas por las redes sociales, o por complementos externos de contenido como google maps.
			</p>
		</div>
		<div class="span12">
			<div class="w-100 form-check-inline mb-1">
				A continuación puedes permitir las cookies que desees que se ejecuten en la web (de las disponibles en la misma), así como información detallada sobre ellas:
			</div>
		</div>
		<form id="form_cookies" class="span12 d-flex align-items-stretch pb-2 border-bottom" method="POST" action="javascript:form_cookies();">
			<div class="form-check-inline float-left">
				<a id="coo_inf_mas" class="btn btn-sm btn-default" href="javascript:sho_inf('a');"><small>+ info</small></a>
			</div>
			<div class="form-check form-check-inline mb-0 d-flex align-items-center float-left btn">
				<input class="form-check-input h-100 float-left btn" type="checkbox" value="1" name="coo_nec" id="defaultCheck1" disabled checked>
				<label class="form-check-label float-left" for="defaultCheck1">
					Necesarias (obligatorias)
				</label>
			</div>
			<?
			if($tot_coo_ana == '1'){
			?>
			<div class="form-check form-check-inline mb-0 d-flex align-items-center float-left btn">
				<? if($_COOKIE['ac_a'] == '1'){$checked = 'checked';}else{$checked = '';} ?>
				<input id="coo_ana" class="form-check-input h-100 float-left btn" type="checkbox" value="1" name="coo_ana" <?=$checked?>>
				<label class="form-check-label float-left">
					Analíticas
				</label>
			</div>
			<?
			}
			if($tot_coo_ter == '1'){
			?>
			<div class="form-check form-check-inline mb-0 d-flex align-items-center float-left btn">
				<? if($_COOKIE['ac_t'] == '1'){$checked = 'checked';}else{$checked = '';} ?>
				<input id="coo_ter" class="form-check-input h-100 float-left btn" type="checkbox" value="1" name="coo_ter" <?=$checked?>>
				<label class="form-check-label float-left">
					De terceros
				</label>
			</div>
			<?
			}
			?>
			<div class="form-check-inline">
				<button type="submit" class="btn btn-sm btn-success"><small>Guardar configuración</small></button>
			</div>
		</form>
		<?
		$url_ser = $_SERVER["REQUEST_URI"]
		?>
		<script>
			function form_cookies(){
				var coo_ana = $('#coo_ana:checked').val();
				if(typeof(coo_ana) == 'undefined'){coo_ana = 0;}
				setCookie('ac_a', coo_ana, 30);
				var coo_ter = $('#coo_ter:checked').val();
				if(typeof(coo_ter) == 'undefined'){coo_ter = 0;}
				setCookie('ac_t', coo_ter, 30);
				location.href = '<?=$url_ser?>';
				setCookie("acookie", "1", 30);
			}
		</script>
		<div id="inf_coo" class="span12 pt-2">
			<? /*
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="active">
					<a class="" id="nec-tab" data-toggle="tab" href="#nec" role="tab" aria-controls="nec" aria-selected="true">Necesarias (obligatorias)</a>
				</li>
				<?
				if($tot_coo_ana == '1'){
				?>
				<li class="">
					<a class="" id="ana-tab" data-toggle="tab" href="#ana" role="tab" aria-controls="ana" aria-selected="true">Analíticas</a>
				</li>
				<?
				}
				if($tot_coo_ter == '1'){
				?>
				<li class="">
					<a class="" id="ter-tab" data-toggle="tab" href="#ter" role="tab" aria-controls="ter" aria-selected="true">De terceros</a>
				</li>
				<?
				}
				?>
			</ul>
			*/ ?>
			<div class="tab-content bg-white" id="myTabContent">
				<div class="tab-pane active" id="nec" role="tabpanel" aria-labelledby="home-tab">
					<div class="row-fluid">
						<div class="span12">
							<p class="padding">
								<u>INFORMACIÓN:</u>
								<br>
								Las cookies necesarias ayudan a la navegación por parte del usuario activando funciones básicas y el acceso a áreas seguras de la web. Estas cookies no pueden desactivarse para el correcto funcionamiento de la web.
							</p>
						</div>
						<table class="table table-striped txt-cookies" style="margin-bottom:0px;">
							<thead>
								<tr>
									<th>Cookie</th>
									<th>Próposito</th>
									<th>Caducidad</th>
									<th>Tipo</th>
								</tr>
							</thead>
							<tbody>
								<?
								echo $avi_coo_nec;
								?>
							</tbody>
						</table>
					</div>
				</div>
				<?
				if($tot_coo_ana == '1'){
				?>
				<div class="tab-pane" id="ana" role="tabpanel" aria-labelledby="profile-tab">
					<div class="row-fluid">
						<div class="span12">
							<p class="padding">
								<u>INFORMACIÓN:</u>
								<br>
								Las cookies analíticas recogen datos de navegación con el objetivo de ayudar a los propietarios de la web a comprender cómo interactúan los visitantes en sus diferentes páginas, reuniendo y proporcionando información de forma anónima.
							</p>
						</div>
						<table class="table txt-cookies" style="margin-bottom:0px;">
							<thead>
								<tr>
									<th scope="col">Cookie</th>
									<th scope="col">Próposito</th>
									<th scope="col">Caducidad</th>
									<th scope="col">Tipo</th>
								</tr>
							</thead>
							<tbody>
								<?
								echo $avi_coo_ana;
								?>
							</tbody>
						</table>
					</div>
				</div>
				<?
				}
				if($tot_coo_ter == '1'){
				?>
				<div class="tab-pane" id="ter" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row-fluid">
						<div class="span12">
							<p class="padding">
								<u>INFORMACIÓN:</u>
								<br>
								Las cookies de terceros son generadas por proveedores externos a la web mediante anuncios, utilidades, píxeles de seguimiento o similares. Recogen información relevante como la edad, la ubicación, el sexo y el comportamiento de los usuarios, lo que las convierte en potentes herramientas para el marketing online.
							</p>
						</div>
						<table class="table txt-cookies" style="margin-bottom:0px;">
							<thead>
								<tr>
									<th scope="col">Cookie</th>
									<th scope="col">Próposito</th>
									<th scope="col">Caducidad</th>
									<th scope="col">Tipo</th>
								</tr>
							</thead>
							<tbody>
								<?
								echo $avi_coo_ter;
								?>
							</tbody>
						</table>
					</div>
				</div>
				<?
				}
				?>
			</div>
		</div>
	</div>
</div>
<script>
	function sho_inf(o){
		$('#inf_coo').slideToggle(300);
		if(o == 'a'){
			$('#coo_inf_mas').html('<small>- info</small>').attr('href','javascript:sho_inf("c")');
		}else if(o == 'c'){
			$('#coo_inf_mas').html('<small>+ info</small>').attr('href','javascript:sho_inf("a")');
		}
	}
	function slidetog(){
		$('#cookies_ocu').slideToggle();
	}
	function setCookie(cname, cvalue, exdays) {
	  var d = new Date();
	  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	  var expires = "expires=" + d.toGMTString();
	  document.cookie = cname + "=" + cvalue + "; " + expires;
	}
	function getCookieValue(a) {
		var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
		return b ? b.pop() : '';
	}
	$(document).ready(function() { 
		var cookie = getCookieValue('acookie');
		if (cookie == '') {
			$('#form_cookies input[type="checkbox"]'). prop("checked", true);
		}
	});
</script>
