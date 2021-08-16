

<? include ("acookies.php"); ?>
<?php

if(!isset($_GET['hl']) || ($_GET['hl'] != 'esp' && $_GET['hl'] != 'ing'))
{
	$hl = $_SESION['hl'] = 'esp';
}
else
{
	$hl = $_SESION['hl'] = $_GET['hl'];
}

if (isset($_GET['hl'])){$hl=$_GET['hl'];}
else $hl = $_SESION['hl'];
	switch ($hl) {
    case 'esp':
			$ini = "Inicio";
			$emp = "Sobre Nosotros";
			$pro = "Productos";
			$con = "Contacto";
			
			$esp = "esp";
			$txt_esp = "Español";
			$cat = "cat";
			$txt_cat = "Catalá";
			$ing = "ing";
			$txt_ing = "English";
			$fra = "fra";
			$txt_fra = "Français";
			$deu = "deu";
			$txt_deu = "Deutsch";
			$ita = "ita";
			$txt_ita = "Italiano";
			
			$empresa_titular = "DETAILS HOUSE S.L.";
			$cif_empresa = "B73303281";
			$direccion_empresa = "P.I. LAS TERESAS, C/ MIGUEL SERVET, PARC B16, APDO 562";
			$poblacion_empresa = "YECLA";
			$cp_empresa = "30510";
			$provincia_empresa = "MURCIA";
			$telf = "968752693";
			$mail_cont_empresa = "dori.guaita@rafaelortega.es";
			$host = "rafaelortega.es";
			$inscripcion_reg = "inscrito en el Registro Mercantil de Murcia, Tomo 2100, Libro 0, Folio 218, inscripción 1ª";


			$texti = "Muestrarios Textiles";
			$avi  = "Aviso Legal";
			$pol = "Política de Privacidad";
			$cook = "Política de Cookies";
			$sig = "Síguenos en";
			$cont = "Contacta con nosotros";
			
			$dest = "Productos Destacados";
			$antes = "antes";
			$con_pre = "+ info";
			
		$nosot = "Historia";		 
		$txtempresa1 = "<p style='font-size: 14px; line-height: 1.5em'>
	    Comenzando nuestra historia a principios de los 90, Tapizados Rafael Ortega podemos decir que es hoy una de las empresas más dinámicas y atractivas del sector del Mueble Tapizado en España.<br /><br />
		Su vocación por este sector, el control de todo el proceso de producción y el continuo trabajo diario basado en los equipos humanos y en la Innovación, han hecho que Tapizados Rafael Ortega cuente hoy con una de las gamas más adaptadas y extensas de producto en cuanto a modelos, estructuras y telas se refiere.<br /><br />
		Por otro lado, el control de toda la cadena de valor, otorga a Tapizados Rafael Ortega una máxima competitividad, lo que permite dotar a la empresa de una visión Internacional.<br /><br />
		La conclusión es que familias como sofás clásicos, vanguardistas, rinconeras, chaisslongues, butacas, reclinables, relax, extraibles, leds, etc. recojen perfectamente la idea de su creador Rafael Ortega.

        </p>";
		$mision = "Mision";			
		$txtempresa2 = "<p style='font-size: 14px; line-height: 1.5em'>
        Atender las necesidades de amueblamiento de la sociedad, principalmente en el sector de la tapicería, proporcionando a nuestro clientes productos de calidad a precio asequible.

        </p>";
		$vision = "Vision";
		$txtempresa3 = "<p style='font-size: 14px; line-height: 1.5em'>
		Ser una empresa familiar, de referencia en el sector, con visión internacional y tratando de superar constantemente las expectativas de nuestros clientes.<br /><br />
		Creemos que el éxito de nuestro servicio surge de la elección de nuestro personal que cuenta con experiencia, cercanía al cliente y vocación, lo que permite ser una empresa ágil, seria, respetable y estar atentos ante los cambios y exigencias que nos demande el mercado.

        </p>";
		$valores = "Valores";
		$txtempresa4 = "<p style='font-size: 14px; line-height: 1.5em'>
		Proactividad y participación aportada por nuestro personal, pilares para exitoso crecimiento de nuestra organización.<br /><br />
		Esfuerzo y dedicación acompañando a nuestros clientes.<br /><br />
		Contacto directo con nuestros clientes en todo momento.<br /><br />
		Respetuosos con el medio ambiente.<br /><br />
		Compromiso con los resultados.<br /><br />
		Responsabilidad Social.<br /><br />
		Trabajo en equipo.<br /><br />
		Ergonomía.<br /><br />
		
        </p>";		
		$innovacion = "Innovación";
		$txtidi1 = "Hoy en día, para satisfacer la demanda de consumo es necesario adaptarse a las nuevas exigencias del consumidor. Entre ellas, se encuentra la integración del ocio y el relax. Los retos de la innovación pasan porque la tecnología permita disfrutar del ocio en casa, a la vez que analizar los distintos estilos de vida que nos lleven a detectar y satisfacer necesidades presentes y futuras.<br /><br />
		Además, la utilización de materiales no contaminantes, sin humos y residuos biodegradables son un requisito indispensable para el desarrollo sostenible.<br /><br />
		Calidad, seguridad en el hogar, preocupación medioambiental, durabilidad, entre otros, son valores que otorgan la base del desarrollo futuro de una sociedad moderna y con ella el de las empresas.<br /><br />
		Así pues, conscientes de ello, Tapizados Rafael Ortega, mantiene en toda su organización, valores encaminados a una política de I+D+I activa y moderna que permita a la empresa estar en permanente desarrollo.<br /><br />
		";
		$calidad = "Calidad";
		$txtidi2 = "Nuestro principal objetivo es conseguir la satisfacción de todos nuestros clientes, sin excepción.<br /><br />
		Para conseguirlo empleamos la máxima calidad en la fabricación de nuestros productos, garantizando su durabilidad y resistencia. Una meta que se alcanza con la validación de todos nuestros productos en base a la normas internacionales que testan tanto los componentes como el producto final en uso, durabilidad y limpieza a lo largo del tiempo.
		";
		
			
		$localiz = "Datos de contacto y Localización";
		$formul = "Formulario de contacto";
		$nomb = "Nombre";
		$pers = "Persona de contacto";
		$telef = "Teléfono";
		$mens = "Mensaje";
		$oblig = "Todos los campos marcados con asterisco son obligatorios";
		$privacidad1 = "He leído y acepto la ";
		// $privacidad2 = "acepta nuestra";
		$privacidad3 = "Política de Privacidad";
		$env = "Enviar";
			
		$parr_legal = "<figcaption class='figure-caption'>
					Con la finalidad de dar cumplimiento al artículo 10 de la Ley 34/2002 de Servicios de la Sociedad de la Información y Comercio Electrónico, informamos al usuario de nuestros datos:
					<br><br>
					- Denominación Social: ".$empresa_titular."			
					<br><br>
					- Domicilio Social: ".$direccion_empresa." - ".$cp_empresa." - ".$poblacion_empresa." - ".$provincia_empresa.".
					<br><br>
					- CIF: ".$cif_empresa.".			
					<br><br>
					- Teléfono: ".$telf.".
					<br><br>
					- e-Mail: ".$mail_cont_empresa.". 
					<br><br>
					- Datos Registrales: ".$inscripcion_reg.".
					<br><br>
					- Pagina Web: www.".$host."		
					</figcaption><br><br>
					<h3>Objeto</h3>
					<figcaption class='figure-caption'>
					El prestador, responsable del sitio web, pone a disposición de los usuarios el presente documento con el que pretende dar cumplimiento a las obligaciones dispuestas en la Ley 34/2002, de Servicios de la Sociedad de la Información y del Comercio Electrónico (LSSI-CE), así como informar a todos los usuarios del sitio web respecto a cuáles son las condiciones de uso del sitio web.<br><br>
					Toda persona que acceda a este sitio web asume el papel de usuario, comprometiéndose a la observancia y cumplimiento riguroso de las disposiciones aquí dispuestas, así como a cualquier otra disposición legal que fuera de aplicación.<br><br>
					El prestador se reserva el derecho a modificar cualquier tipo de información que pudiera aparecer en el sitio web, sin que exista obligación de preavisar o poner en conocimiento de los usuarios dichas obligaciones, entendiéndose como suficiente con la publicación en el sitio web del prestador.
					</figcaption><br><br>
					<h3>Responsabilidad</h3>
					<figcaption class='figure-caption'>
					El prestador se exime de cualquier tipo de responsabilidad derivada de la información publicada en su sitio web, siempre que esta información haya sido manipulada o introducida por un tercero ajeno al mismo.<br><br>
					El sitio web del prestador puede utilizar cookies (pequeños archivos de información que el servidor envía al ordenador de quien accede a la página) para llevar a cabo determinadas funciones que son consideradas imprescindibles para el correcto funcionamiento y visualización del sitio. Las cookies utilizadas en el sitio web tienen, en todo caso, carácter temporal con la única finalidad de hacer más eficaz su transmisión ulterior y desaparecen al terminar la sesión del usuario. En ningún caso se utilizarán las cookies para recoger información de carácter personal.<br><br>
					Desde el sitio web del cliente es posible que se redirija a contenidos de terceros sitios web. Dado que el prestador no puede controlar siempre los contenidos introducidos por los terceros en sus sitios web, éste no asume ningún tipo de responsabilidad respecto a dichos contenidos. En todo caso, el prestador manifiesta que procederá a la retirada inmediata de cualquier contenido que pudiera contravenir la legislación nacional o internacional, la moral o el orden público, procediendo a la retirada inmediata de la redirección a dicho sitio web, poniendo en conocimiento de las autoridades competentes el contenido en cuestión.<br><br>
					El prestador no se hace responsable de la información y contenidos almacenados, a título enunciativo pero no limitativo, en foros, chats, generadores de blogs, comentarios, redes sociales o cualquier otro medio que permita a terceros publicar contenidos de forma independiente en la página web del prestador. No obstante y en cumplimiento de lo dispuesto en el art. 11 y 16 de la LSSI-CE, el prestador se pone a disposición de todos los usuarios, autoridades y fuerzas de seguridad, y colaborando de forma activa en la retirada o en su caso bloqueo de todos aquellos contenidos que pudieran afectar o contravenir la legislación nacional, o internacional, derechos de terceros o la moral y el orden público. En caso de que el usuario considere que existe en el sitio web algún contenido que pudiera ser susceptible de esta clasificación, se ruega lo notifique de forma inmediata al administrador del sitio web.<br><br>
					Este sitio web ha sido revisado y probado para que funcione correctamente. En principio, puede garantizarse el correcto funcionamiento los 365 días del año, 24 horas al día. No obstante, el prestador no descarta la posibilidad de que existan ciertos errores de programación, o que acontezcan causas de fuerza mayor, catástrofes naturales, huelgas, o circunstancias semejantes que hagan imposible el acceso a la página web.
					</figcaption><br><br>
					<h3>Propiedad Intelectual e industrial</h3>
					<figcaption class='figure-caption'>
					Todos los contenidos del Sitio Web -tales como textos, gráficos, fotografías, logotipos, iconos, imágenes, así como el diseño gráfico, código fuente y software-, son de la exclusiva propiedad de MsWeb Coop. Val., o de terceros cuyos derechos ostenta legítimamente MsWeb Coop. Val., y están protegidos por la legislación nacional e internacional.<br><br>
					Independientemente de la finalidad para la que fueran destinados, la reproducción total o parcial, uso, explotación, distribución y comercialización, requiere en todo caso de la autorización escrita previa por parte del prestador. Cualquier uso no autorizado previamente por parte del prestador será considerado un incumplimiento grave de los derechos de propiedad intelectual o industrial del autor.<br><br>
					Los diseños, logotipos, texto y/o gráficos ajenos al prestador y que pudieran aparecer en el sitio web, pertenecen a sus respectivos propietarios, siendo ellos mismos responsables de cualquier posible controversia que pudiera suscitarse respecto a los mismos. En todo caso, el prestador cuenta con la autorización expresa y previa por parte de los mismos.<br><br>
					El prestador NO AUTORIZA expresamente a que terceros puedan redirigir directamente a los contenidos concretos del sitio web, debiendo en todo caso redirigir al sitio web principal del prestador.<br><br>
					El prestador reconoce a favor de sus titulares los correspondientes derechos de propiedad industrial e intelectual, no implicando su sola mención o aparición en el sitio web la existencia de derechos o responsabilidad alguna del prestador sobre los mismos, como tampoco respaldo, patrocinio o recomendación por parte del mismo.<br><br>
					Para realizar cualquier tipo de observación respecto a posibles incumplimientos de los derechos de propiedad intelectual o industrial, así como sobre cualquiera de los contenidos del sitio web, puede hacerlo a través del siguiente correo electrónico.
					</figcaption><br><br>
					<h3>Veracidad de la información</h3>
					<figcaption class='figure-caption'>
						Toda la información que facilita el Usuario tiene que ser veraz. A estos efectos, el Usuario garantiza la autenticidad de los datos comunicados a través de los formularios para la suscripción de los Servicios. Será responsabilidad del Usuario mantener toda la información facilitada a ".$empresa_titular." permanentemente actualizada de forma que responda, en cada momento, a su situación real. En todo caso, el Usuario será el único responsable de las manifestaciones falsas o inexactas que realice y de los perjuicios que cause al prestador o a terceros.
					</figcaption><br><br>
					<h3>Menores de edad</h3>
					<figcaption class='figure-caption'>
						Para el uso de los servicios, los menores de edad tienen que obtener siempre previamente el consentimiento de los padres, tutores o representantes legales, responsables últimos de todos los actos realizados por los menores a su cargo. La responsabilidad en la determinación de contenidos concretos a los cuales acceden los menores corresponde a aquellos, es por eso que si acceden a contenidos no apropiados por Internet, se tendrán que establecer en sus ordenadores mecanismos, en particular programas informáticos, filtros y bloqueos, que permitan limitar los contenidos disponibles y, a pesar de que no sean infalibles, son de especial utilidad para controlar y restringir los materiales a los que pueden acceder los menores.
					</figcaption><br><br>
					<h3>Obligación de hacer un uso correcto de la Web</h3>
					<figcaption class='figure-caption'>
					El Usuario se compromete a utilizar la Web de conformidad a la Ley y al presente Aviso Legal, así como a la moral y a buenas costumbres. A tal efecto, el Usuario se abstendrá de utilizar la página con finalidades ilícitas o prohibidas, lesivas de derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilización de equipos informáticos o documentos, archivos y toda clase de contenidos almacenados en cualquier equipo informático del prestador.<br><br>
					En particular, y a título indicativo pero no exhaustivo, el Usuario se compromete a no transmitir, difundir o poner a disposición de terceros informaciones, datos, contenidos, mensajes, gráficos, dibujos, archivos de sonido o imagen, fotografías, grabaciones, software y, en general, cualquier clase de material que:<br><br>
					(a) sea contraria, desprecie o atente contra los derechos fundamentales y las libertades públicas reconocidas constitucionalmente, en tratados internacionales y otras normas vigentes;<br>
					(b) induzca, incite o promueva actuaciones delictivas, denigrantes, difamatorias, violentas o, en general, contrarias a la ley, a la moral y al orden público;<br>
					(c) induzca, incite o promueva actuaciones, actitudes o pensamientos discriminatorios por razón de sexo, raza, religión, creencias, edad o condición;<br>
					(d) sea contrario al derecho al honor, a la intimidad personal o familiar o a la propia imagen de las personas;<br>
					(e) de cualquier manera perjudique la credibilidad del prestador o de terceros; y<br>
					(f) constituya publicidad ilícita, engañosa o desleal.
					</figcaption><br><br>
					<h3>Ley Aplicable y Jurisdicción</h3>
					<figcaption class='figure-caption'>
					Para la resolución de todas las controversias o cuestiones relacionadas con el presente sitio web o de las actividades en él desarrolladas, será de aplicación la legislación española, a la que se someten expresamente las partes, siendo competentes para la resolución de todos los conflictos derivados o relacionados con su uso los Juzgados y Tribunales de YECLA.
					</figcaption><br><br>
					";

			
		$priv = "Política de privacidad";
		$parr_priv = "
						Siguiendo las directrices del Reglamento General Europeo en materia de Protección de Datos de carácter personal (RGPD EU) 2016/679
					 y la Ley Orgánica de Protección de Datos de carácter personal y Garantía de Derechos Digitales (LOPD-GDD) 3/2018 de 5 de diciembre, 
					les informamos que: 
					<br><br>
					<h3>1. DATOS DEL RESPONSABLE DEL TRATAMIENTO</h3>
					<figcaption class='figure-caption'>
					- Razón Social: ".$empresa_titular." (en adelante, la “Empresa” o el “Responsable”). 			
					<br>
					- CIF: ".$cif_empresa.".			
					<br>
					- Domicilio: ".$direccion_empresa." - ".$cp_empresa." - ".$poblacion_empresa." - ".$provincia_empresa.".
					<br>
					- Teléfono: ".$telf.".
					<br>
					- Email para comunicaciones en materia de Protección de datos: ".$mail_cont_empresa.". 										
					</figcaption><br>
					<h4>1.1. Normativa aplicable</h4>
					<figcaption class='figure-caption'>
					Nuestra Política de Privacidad se ha diseñado de acuerdo con el Reglamento General de Protección de Datos de la UE 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos y por el que se deroga la Directiva 95/46/CE (Reglamento general de protección de datos), y en lo que no contradiga el mencionado Reglamento, por lo dispuesto en el marco legislativo español en materia de Protección de Datos de Carácter Personal.<br><br>  
					Al facilitarnos sus datos, Usted declara haber leído y conocer la presente Política de Privacidad, prestando su consentimiento inequívoco y expreso al tratamiento de sus datos personales de acuerdo a las finalidades y términos aquí expresados. <br><br>
					La Empresa podrá modificar la presente Política de Privacidad para adaptarla a las novedades legislativas, jurisprudenciales o de interpretación de la Agencia Española de Protección de Datos. Estas condiciones de privacidad podrán ser complementadas por el Aviso Legal, Política de Cookies y las Condiciones Generales que, en su caso, se recojan para determinados productos o servicios, si dicho acceso supone alguna especialidad en materia de protección de datos de carácter personal. 
					</figcaption><br>
					<h4>1.2. Delegado de Protección de Datos</h4>
					<figcaption class='figure-caption'>
						La empresa no tiene Delegado de Protección de Datos.
					</figcaption><br>
					<h3>2. FINALIDAD DEL TRATAMIENTO DE LOS DATOS PERSONALES</h3>
					<figcaption class='figure-caption'>
					El tratamiento que realizamos de sus datos personales responde a las siguientes finalidades: <br><br>
					- Proporcionarle información relacionada con los productos y servicios que ofrece nuestra empresa y que detallan en este web site.<br>
					- Realizar la contratación de nuestros servicios mediante la aceptación del correspondiente presupuesto / pedido y/o la firma de un contrato mercantil. <br>
					- Enviarle por correo electrónico y/o postal las noticias y novedades acerca de nuestra entidad, así como las actualizaciones de nuestro catálogo de productos y servicios.
					</figcaption><br>
					<h4>2.1. Plazo de Conservación de sus datos</h4>
					<figcaption class='figure-caption'>
					Conservaremos sus datos personales desde que nos dé su consentimiento hasta que lo revoque o bien solicite la limitación del tratamiento. En tales casos, mantendremos sus datos de manera bloqueada durante los plazos legalmente exigidos.
					</figcaption><br>
					<h3>3. LEGITIMACIÓN Y DATOS RECABADOS</h3>
					<figcaption class='figure-caption'>
					La legitimación para el tratamiento de sus datos es el consentimiento expreso otorgado mediante un acto positivo y afirmativo (rellenar el formulario correspondiente y marcar la casilla de aceptación de esta política) en el momento de facilitarnos sus datos personales. 
					</figcaption><br>
					<h4>3.1. Consentimiento para tratar sus datos</h4>
					<figcaption class='figure-caption'>
					Al rellenar los formularios, marcar la casilla “Acepto la Política de Privacidad” y hacer clic para enviar los datos, o al remitir correos electrónicos a la Empresa a través de las cuentas habilitadas al efecto, el Usuario manifiesta haber leído y aceptado expresamente la presente política de privacidad, y otorga su consentimiento inequívoco y expreso al tratamiento de sus datos personales conforme a las finalidades indicadas.  
					</figcaption><br>
					<h4>3.2. Categorías de datos</h4>
					<figcaption class='figure-caption'>
					Los datos que se recaban se refieren a la categoría de datos identificativos, como pueden ser: Nombre y Apellidos, Teléfono, Dirección Postal, Empresa, Correo electrónico, así como la dirección IP desde donde accede al formulario de recogida de datos.
					</figcaption><br>
					<h3>4. MEDIDAS DE SEGURIDAD</h3>
					<figcaption class='figure-caption'>
					Dentro de nuestro compromiso por garantizar la seguridad y confidencialidad de sus datos de carácter personal, le informamos que se han adoptado las medidas de índole técnica y organizativas necesarias para garantizar la seguridad de los datos de carácter personal y evitar su alteración, pérdida, tratamiento o acceso no autorizado, habida cuenta del estado de la tecnología, la naturaleza de los datos almacenados y los riesgos a que estén expuestos, según el Art. 32 del RGPD EU 679/2016.
					</figcaption><br>
					<h3>5. CESIÓN DE DATOS</h3>
					<figcaption class='figure-caption'>
					No se prevén cesiones de datos ni transferencias internacionales de sus datos, a excepción de las autorizadas por la legislación fiscal, mercantil y de telecomunicaciones así como en aquellos casos en los que una autoridad judicial nos lo requiera. 
					</figcaption><br>
					<h3>6. DERECHOS DEL USUARIO</h3>
					<figcaption class='figure-caption'>
					Cualquier interesado tiene derecho a obtener confirmación sobre si estamos tratando datos personales que le conciernan, o no. Las personas interesadas tienen derecho a acceder a sus datos personales, así como a solicitar la rectificación de los datos inexactos o, en su caso, solicitar su supresión cuando, entre otros motivos, los datos ya no sean necesarios para los fines que fueron recogidos. En determinadas circunstancias, los interesados podrán solicitar la limitación del tratamiento de sus datos, en cuyo caso únicamente los conservaremos para el ejercicio o la defensa de reclamaciones. Por motivos relacionados con su situación particular, los interesados podrán oponerse al tratamiento de sus datos. El Responsable del fichero dejará de tratar los datos, salvo por motivos legítimos imperiosos, o el ejercicio o la defensa de posibles reclamaciones.<br><br>
					De acuerdo con la legislación vigente tiene los siguientes derechos: derecho a solicitar el acceso a sus datos personales, derecho a solicitar su rectificación o supresión, derecho a solicitar la limitación de su tratamiento, derecho a oponerse al tratamiento, derecho a la portabilidad de los datos y así mismo, a revocar el consentimiento otorgado. 
					</figcaption><br>
					<h4>6.1. ¿Cómo ejercitar mis derechos?</h4>
					<figcaption class='figure-caption'>
					Para ejercer sus derechos, debe dirigirse al responsable, solicitando el correspondiente formulario para el ejercicio del derecho elegido. Opcionalmente, puede acudir a la Autoridad de Control competente para obtener información adicional acerca de sus derechos. Los datos de contacto para el ejercicio de sus derechos son el teléfono ".$telf." y el correo electrónico: ".$mail_cont_empresa.". Recuerde acompañar una copia de un documento que nos permita identificarle.
					</figcaption><br>
					<h3>7. CONSENTIMIENTO PARA ENVÍO DE COMUNICACIONES ELECTRÓNICAS</h3>
					<figcaption class='figure-caption'>
					Así mismo, y de acuerdo con lo establecido en la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico, completando el formulario de recogida de datos y marcando la correspondiente casilla “Acepto el envío de comunicaciones electrónicas”, está otorgando el consentimiento expreso para enviarle a su dirección de correo electrónico, teléfono, fax u otro medio electrónico en envío de información acerca de la Empresa.
					</figcaption><br>
					";

		$cook = "Política de Cookies";
		$parr_cook = "<h3>1. ANTECEDENTES</h3>
					<figcaption class='figure-caption'>
					De conformidad con la normativa española que regula el uso de cookies en relación a la prestación de servicios de comunicaciones electrónicas, recogida en el Real Decreto Ley 13/2012del 30 de marzo, le informamos sobre las cookies utilizadas en el sitio web de ".$empresa_titular." y el motivo de su uso. Asimismo, le informa de que al navegar en el Sitio Web usted está prestando su consentimiento para poder utilizarlas.
					</figcaption><br><br>
					<h3>2. ¿QUE SON LAS COOKIES?</h3>
					<figcaption class='figure-caption'>
					Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.Las cookies se asocian únicamente a un usuario anónimo y su ordenador o dispositivo y no proporcionan referencias que permitan conocer sus datos personales. 
					</figcaption><br><br>
					<h3>3. TIPOS DE COOKIES</h3>
					<figcaption class='figure-caption'>					
					
					</figcaption><br><br>
					<h3>4. TIPOS DE COOKIES UTILIZADAS POR ESTE SITIO WEB</h3>
					<figcaption class='figure-caption'>
					Las cookies utilizadas en nuestro sitio web, son de sesión y de terceros, y nos permiten almacenar y acceder a información relativa al idioma, el tipo de navegador utilizado, y otras características generales predefinidas por el usuario, así como, seguir y analizar la actividad que lleva a cabo, con el objeto de introducir mejoras y prestar nuestros servicios de una manera más eficiente y personalizada. ".$empresa_titular." no utiliza cookies publicitarias o de publicidad comportamental.<br><br>
					La utilización de las cookies ofrece ventajas en la prestación de servicios dentro de lo que se conoce como la sociedad de la información, puesto que, facilita al usuario la navegación y el acceso a los diferentes servicios que ofrece este sitio web; evita al usuario tener que configurar las características generales predefinidas cada vez que accede al sitio web; favorece la mejora del funcionamiento y de los servicios prestados a través de este sitio web, tras el correspondiente análisis de la información obtenida a través de las cookies instaladas.<br><br>

					<style type='text/css'>
					.tabla-cookies td {
						border: 1px solid #999;
						border-collapse: collapse;
						font-size: 0.8em;
						/*vertical-align: top;*/
					}
					.tabla-cookies #cab {
						background-color: #F0F8FF;
					}

					.cook:hover{
						color: #8A2BE2;
					}
					
					</style>

					<table class='tabla-cookies' width='100%' cellpadding='10' cellspacing='0'>				  
				  <tr>
				    <td class='text-center' id='cab'>Nombre</td>
				    <td class='text-center' id='cab'>Tipo</td>
				    <td class='text-center' id='cab'>Caducidad</td>
				    <td class='text-center' id='cab'>Finalidad</td>
				    <td class='text-center' id='cab'>Clase</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utma</td>
				    <td class='text-center'>De Terceros (Google Analytics)</td>
				    <td class='text-center'>2 años</td>
				    <td class='text-center'>Se usa para distinguir usuarios y sesiones.</td>
				    <td class='text-center'>No Exenta</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmb</td>
				    <td class='text-center'>De Terceros (Google Analytics)</td>
				    <td class='text-center'>30 minutos</td>
				    <td class='text-center'>Se usa para determinar nuevas sesiones o visitas.</td>
				    <td class='text-center'>No Exenta</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmc</td>
				    <td class='text-center'>De Terceros (Google Analytics)</td>
				    <td class='text-center'>Al finalizar la sesión</td>
				    <td class='text-center'>Se configura para su uso con Urchin.</td>
				    <td class='text-center'>No Exenta</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmz</td>
				    <td class='text-center'>De Terceros (Google Analytics)</td>
				    <td class='text-center'>6 meses</td>
				    <td class='text-center'>Almacena el origen o la campaña que explica cómo el usuario ha llegado hasta la página web.</td>
				    <td class='text-center'>No Exenta</td>
				  </tr>				  
				</table>

				</figcaption><br><br>
				<h3>5. REVOCACIÓN Y ELIMINACIÓN DE COOKIES</h3>
				<figcaption class='figure-caption'>
				En todo momento podrá acceder a la configuración de su navegador aceptando o rechazando todas las cookies, o bien seleccionar aquéllas cuya instalación admite y cuáles no, siguiendo uno de los siguientes procedimientos, que depende del navegador que utilice:<br><br>
				<b>Google Chrome</b> (en el Menú Herramientas)<br>
				Configuración > Mostrar opciones avanzadas > Privacidad (Configuración de Contenido) > Cookies<br>
				Más información: <a class='cook' href='https://support.google.com/chrome/answer/95647?hl=es'>https://support.google.com/chrome/answer/95647?hl=es</a> <br><br>
				<b>Microsoft Internet Explorer</b> (en el Menú Herramientas)<br>
				Opciones de Internet > Privacidad > Avanzada<br>
				Más información: <a class='cook' href='http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-9 '>http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-9 </a><br><br>
				<b>Firefox</b><br>
				Opciones > Privacidad > Cookies<br>
				Más información: <a class='cook' href='http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we'>http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a><br><br> 
				<b>Safari, iPad e iPhone</b><br>
				Preferencias > Privacidad<br>
				Más información: <a class='cook' href='http://www.apple.com/es/privacy/use-of-cookies/'>http://www.apple.com/es/privacy/use-of-cookies/</a><br><br>
				<b>Opera</b><br>
				Configuración > Opciones > Avanzado > Cookies<br>
				Más información: <a class='cook' href='http://help.opera.com/Linux/10.60/es-ES/cookies.html'>http://help.opera.com/Linux/10.60/es-ES/cookies.html</a> 
				</figcaption><br><br>
				<h3>6. TERCEROS PRESTADORES DE SERVICIOS</h3>
				<figcaption class='figure-caption'>
				En concreto los terceros prestadores de servicios con los que hemos contratado algún servicio para el que es necesario la utilización de cookies son:<br><br>
				<table class='tabla-cookies' width='100%' cellpadding='10' cellspacing='0'>
				<tr>
				    <td class='text-center' id='cab'>Proveedor</td>
				    <td class='text-center' id='cab'>Finalidad del Servicio y de la Cookie</td>
				    <td class='text-center' id='cab'>Información del Proveedor</td>
 				</tr>
 				<tr>
				    <td class='text-center'>GOOGLE Inc.</td>
				    <td class='text-center'>Análisis estadístico del sitio web a nivel de  contabilización de visitantes, páginas visitadas, palabras clave utilizadas y similares</td>
				    <td class='text-center'><a class='cook' href='http://www.google.es/intl/es/policies/privacy/'>http://www.google.es/intl/es/policies/privacy/</a></td>
 				</tr>
 				</table>
				</figcaption><br><br>
			";

		$av_cook = "Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación. Si continua navegando, consideramos que acepta su uso. Puede cambiar la configuración u obtener más información
			";
			
       break;
    case 'ing':
			
			$ini = "Home"; 
			$emp = "About Us"; 
			$pro = "Products"; 
			$con = "Contact"; 
			
			$esp = "esp"; 
			$txt_esp = "Spanish"; 
			$cat = "cat"; 
			$txt_cat = "Catala"; 
			$ing = "ing"; 
			$txt_ing = "Inglés"; 
			$fra = "fra"; 
			$txt_fra = "Français"; 
			$deu = "deu"; 
			$txt_deu = "Deutsch"; 
			$ita = "ita"; 
			$txt_ita = "Italian"; 
			
			$texti = "Swatches Textiles"; 
			$avi = "Legal Notice"; 
			$pol = "Privacy Policy"; 
			$cook = "Cookies Policy";
			$sig = "Follow us"; 
			$cont = "Contact Us"; 

			$empresa_titular = "DETAILS HOUSE S.L.";
			$cif_empresa = "B73303281";
			$direccion_empresa = "P.I. LAS TERESAS, C/ MIGUEL SERVET, PARC B16, APDO 562";
			$poblacion_empresa = "YECLA";
			$cp_empresa = "30510";
			$provincia_empresa = "MURCIA";
			$telf = "968752693";
			$mail_cont_empresa = "dori.guaita@rafaelortega.es";
			$host = "rafaelortega.es";
			$inscripcion_reg = "registered in the Mercantile Register of Murcia, Volume 2100, Book 0, Folio 218, 1st registration";
			
			$dest = "Featured Products"; 
			$antes = "before"; 
			$con_pre = "+ info"; 
			
		$nosot = "History";		 
		$txtempresa1 = "<p style='font-size: 14px; line-height: 1.5em'>
		Starting our history in the early 90's, Tapizados Rafael Ortega can say that it is today one of the most dynamic and attractive companies in the Upholstered Furniture sector in Spain. <br /> <br />
		His vocation for this sector, the control of the entire production process and the continuous daily work based on human teams and Innovation, have made Tapizados Rafael Ortega today has one of the most adapted and extensive product ranges as far as to models, structures and fabrics refers. <br /> <br />
		On the other hand, the control of the entire value chain gives Tapizados Rafael Ortega maximum competitiveness, which allows the company to provide an international vision. <br /> <br />
		The conclusion is that families such as classic sofas, avant-garde, corner chairs, chaisslongues, armchairs, reclining, relax, removable, leds, etc. perfectly collect the idea of its creator Rafael Ortega.

        </p>";
		$mision = "Mission";			
		$txtempresa2 = "<p style='font-size: 14px; line-height: 1.5em'>
		Address the furnishing needs of society, mainly in the upholstery sector, providing our customers with quality products at an affordable price.	

        </p>";
		$vision = "View";
		$txtempresa3 = "<p style='font-size: 14px; line-height: 1.5em'>
		Being a family business, a reference in the sector, with an international vision and constantly trying to exceed the expectations of our customers. <br /> <br />
		We believe that the success of our service arises from the choice of our staff that has experience, proximity to the client and vocation, which allows us to be an agile, serious, respectable company and to be attentive to the changes and demands that the market demands.

        </p>";
		$valores = "Values";
		$txtempresa4 = "<p style='font-size: 14px; line-height: 1.5em'>
		Proactivity and participation provided by our staff, pillars for the successful growth of our organization.<br /><br />
		Effort and dedication accompanying our clients.<br /><br />
		Direct contact with our customers at all times.<br /><br />
		Respectful towards the environment.<br /><br />
		Commitment to the results.<br /><br />
		Social responsability.<br /><br />
		Teamwork.<br /><br />
		Ergonomics.<br /><br />
		
        </p>";		
		$innovacion = "Innovation";
		$txtidi1 = "Nowadays, to satisfy the demand of consumption it is necessary to adapt to the new demands of the consumer. Among them, is the integration of leisure and relaxation. The challenges of innovation happen because technology allows us to enjoy leisure at home, while analyzing the different lifestyles that lead us to detect and meet present and future needs. <br /> <br />
		In addition, the use of non-polluting materials, smoke-free and biodegradable waste is an indispensable requirement for sustainable development. <br /> <br />
		Quality, home security, environmental concern, durability, among others, are values that provide the basis for the future development of a modern society and with it that of companies. <br /> <br />
		Thus, aware of this, Tapizados Rafael Ortega, maintains throughout its organization, values aimed at an active and modern R + D + I policy that allows the company to be in permanent development. <br /> <br />
		";
		$calidad = "Quality";
		$txtidi2 = "Our main objective is to achieve the satisfaction of all our clients, without exception.<br /><br />
		To achieve this, we use the highest quality in the manufacture of our products, guaranteeing their durability and resistance. A goal that is achieved with the validation of all our products based on international standards that test both the components and the final product in use, durability and cleaning over time.
		";
			
			$localiz = "Contact and Location"; 
			$formul = "Contact Form"; 
			$nomb = "Name"; 
			$pers = "Contact"; 
			$telef = "Phone"; 
			$mens = "Message"; 
			$oblig = "All fields marked with asterisk"; 
			$privacidad1 = "I have read and accept the "; 
			// $privacidad2 = "accepts our"; 
			$privacidad3 = "Privacy Policy"; 
			$env = "Submit"; 
			
		$parr_legal = "<figcaption class='figure-caption'>			
					In order to comply with Article 10 of Law 34/2002 on Services of the Information Society and Electronic Commerce, we inform the user of our data:
					<br><br>
					- Company Name: ".$empresa_titular."			
					<br><br>
					- Registered Office: ".$direccion_empresa." - ".$cp_empresa." - ".$poblacion_empresa." - ".$provincia_empresa.".
					<br><br>
					- CIF: ".$cif_empresa.".			
					<br><br>
					- Phone: ".$telf.".
					<br><br>
					- e-Mail: ".$mail_cont_empresa.". 
					<br><br>
					- Registry data: ".$inscripcion_reg.".
					<br><br>
					- Website: www.".$host."		
					</figcaption><br><br>
					<h3>Object</h3>
					<figcaption class='figure-caption'>
					The provider, responsible for the website, makes available to users this document with which it intends to comply with the obligations set forth in Law 34/2002, on Services of the Information Society and Electronic Commerce (LSSI-CE ), as well as informing all users of the website about what the conditions of use of the website are.<br><br>
					Any person accessing this website assumes the role of user, committing to the observance and strict compliance with the provisions set forth herein, as well as any other legal provision that was applicable. <br> <br>
					The provider reserves the right to modify any type of information that may appear on the website, without there being any obligation to pre-advise or inform the users of said obligations, being understood as sufficient with the publication on the website of the provider.
					</figcaption><br><br>
					<h3>Liability</h3>
					<figcaption class='figure-caption'>
					The provider disclaims any liability arising from the information published on its website, provided that this information has been manipulated or introduced by a third party outside the same.<br><br>
					The provider's website may use cookies (small files of information that the server sends to the computer of the person accessing the page) to carry out certain functions that are considered essential for the proper functioning and visualization of the site. The cookies used on the website are, in any case, temporary in nature with the sole purpose of making their subsequent transmission more efficient and disappear at the end of the user's session. Under no circumstances will cookies be used to collect personal information.<br><br>
					From the customer's website you may be redirected to content from third party websites. Since the provider cannot always control the content introduced by third parties on their websites, it does not assume any responsibility for such content. In any case, the provider states that it will proceed to the immediate withdrawal of any content that could contravene national or international law, morality or public order, proceeding to the immediate withdrawal of the redirection to the website, bringing the content in question to the attention of the competent authorities.<br><br>
					The provider is not responsible for the information and content stored, including but not limited to forums, chats, generators of blogs, comments, social networks or any other means that allows third parties to publish content independently on the website of the provider. Nevertheless, and in compliance with the provisions of art. 11 and 16 of the LSSI-CE, the provider makes itself available to all users, authorities and security forces, and actively collaborating in the withdrawal or blocking of all content that could affect or contravene national or international legislation, rights of third parties or morals and public order. If the user considers that there is any content on the website that could be susceptible to this classification, please notify immediately to the website administrator.<br><br>
					This website has been reviewed and tested for proper operation. In principle, correct operation can be guaranteed 365 days a year, 24 hours a day. However, the provider does not rule out the possibility that there are certain programming errors, or that force majeure, natural catastrophes, strikes, or similar circumstances that make it impossible to access the website.				</figcaption><br><br>
					<h3>Intellectual and Industrial Property</h3>
					<figcaption class='figure-caption'>
					All the contents of the Website - such as texts, graphics, photographs, logos, icons, images, as well as graphic design, source code and software - are the exclusive property of MsWeb Coop. Val., or third parties whose rights legitimately hold MsWeb Coop. Val., and are protected by national and international legislation.<br><br>
					Regardless of the purpose for which they were intended, total or partial reproduction, use, exploitation, distribution and marketing, requires in any case prior written permission from the provider. Any use not previously authorized by the provider will be considered a serious breach of intellectual property rights or industrial author.<br><br>
					The designs, logos, text and / or graphics outside the provider and that may appear on the website belong to their respective owners, being themselves responsible for any possible controversy that may arise with respect to them. In any case, the provider has the express prior authorization of the same.<br><br>
					The provider DOES NOT expressly AUTHORIZE that third parties can directly redirect to the specific contents of the website, and must in any case redirect to the main website of the provider.<br><br>
					The provider recognizes in favor of their holders the corresponding rights of industrial and intellectual property, not implying their mere mention or appearance on the website the existence of any rights or liability of the provider over them, nor endorsement, sponsorship or recommendation by the same.<br><br>
					To make any kind of observation regarding possible breaches of intellectual or industrial property rights, as well as on any of the contents of the website, you can do so through the following email.
					</figcaption><br><br>
					<h3>Accuracy of the information</h3>
					<figcaption class='figure-caption'>
					All information provided by the User must be truthful. To these effects, the User guarantees the authenticity of the data communicated through the forms for the subscription of the Services. It will be the responsibility of the User to maintain all the information provided to ".$empresa_titular." permanently updated so that it responds, at all times, to its real situation. In any case, the User will be solely responsible for any false or inaccurate statements made and the damages caused to the provider or third parties.
					</figcaption><br><br>
					<h3>Minors</h3>
					<figcaption class='figure-caption'>
					In order to use the services, minors must always obtain the prior consent of the parents, guardians or legal representatives, who are ultimately responsible for all acts performed by the minors under their care. The responsibility for determining the specific content to which minors have access corresponds to minors, which is why if they access inappropriate content over the Internet, mechanisms will have to be established in their computers, in particular computer programs, filters and blocks, which allow the available content to be limited and, although they are not infallible, they are especially useful for controlling and restricting the materials to which minors may have access.
					</figcaption><br><br>
					<h3>Obligation to make correct use of the Web</h3>
					<figcaption class='figure-caption'>
					The User undertakes to use the Website in accordance with the Law and this Legal Notice, as well as morality and good customs. To this end, the User shall refrain from using the site for illegal or prohibited purposes, damaging the rights and interests of third parties, or in any way that may damage, disable, overload, impair or prevent the normal use of computer equipment or documents, files and all kinds of content stored in any computer equipment of the provider.<br><br>
					In particular, and as an indication but not exhaustive, the User undertakes not to transmit, disseminate or make available to third parties information, data, content, messages, graphics, drawings, sound or image files, photographs, recordings, software and, in general, any kind of material that:<br><br>
					(a) is contrary to, disregards or infringes upon the fundamental rights and public liberties recognized in the Constitution, international treaties and other regulations in force;<br>
					(b) induces, incites or promotes criminal, denigrating, defamatory, violent or, in general, against the law, morality and public order;<br>
					(c) induces, incites or promotes discriminatory actions, attitudes or thoughts on the basis of sex, race, religion, beliefs, age or status;<br>
					(d) is contrary to the right to honour, to personal or family privacy or to the self-image of persons;<br>
					(e) in any way prejudices the credibility of the provider or third parties; and<br>
					(f) constitutes unlawful, misleading or unfair advertising.
					</figcaption><br><br>
					<h3>Applicable Law and Jurisdiction</h3>
					<figcaption class='figure-caption'>
					For the resolution of all the controversies or questions related to the present web site or the activities developed in it, the Spanish legislation will be of application, to which the parts are submitted expressly, being competent for the resolution of all the derived conflicts or related to its use the Courts and Tribunals of YECLA.
					</figcaption><br><br>
			"; 
			
		$priv = "Privacy Policy"; 
		$parr_priv = "   

					Following the guidelines of the European General Regulation on the Protection of Personal Data (RGPD EU) 2016/679
				  and the Organic Law on Protection of Personal Data and Guarantee of Digital Rights (LOPD-GDD) 3/2018 of December 5,
				we inform you that:
				<br><br>
		  <h3>1. DATA OF THE RESPONSIBLE FOR THE TREATMENT</h3>
					<figcaption class='figure-caption'>
					- Company Name: ".$empresa_titular." (hereinafter, the 'Company' or the 'Responsible'). 			
					<br>
					- CIF: ".$cif_empresa.".			
					<br>
					- Address: ".$direccion_empresa." - ".$cp_empresa." - ".$poblacion_empresa." - ".$provincia_empresa.".
					<br>
					- Telephone: ".$telf.".
					<br>
					- Email for data protection communications: ".$mail_cont_empresa.". 										
					</figcaption><br>
					<h4>1.1. Applicable legislation</h4>
					<figcaption class='figure-caption'>
					Our Privacy Policy has been designed in accordance with the General Data Protection Regulations of the EU 2016/679 of the European Parliament and of the Council, of 27 April 2016, relating to the protection of individuals with regard to the processing of personal data and the free circulation of  these data and repealing Directive 95/46/EC (General Data Protection 
					Regulations), and insofar as it does not contradict the aforementioned Regulations, by the provisions of the Spanish legislative framework on the Protection of Personal Data.<br><br>
					By providing us with your data, you declare that you have read and understand this Privacy
					Policy, giving your unequivocal and express consent to the processing of your personal data in
					accordance with the purposes and terms expressed herein.<br><br>
					The Company may modify this Privacy Policy to adapt it to new legislation, case law or
					interpretation of the Spanish Data Protection Agency. These privacy conditions may be
					complemented by the Legal Notice, Cookies Policy and the General Conditions that, where
					appropriate, are collected for certain products or services, if such access involves some specialty
					in the protection of personal data. 
					</figcaption><br>
					<h4>1.2. Data Protection Delegate</h4>
					<figcaption class='figure-caption'>
					The company has no Data Protection Delegate.
					</figcaption><br>
					<h3>2. PURPOSE OF THE PROCESSING OF PERSONAL DATA</h3>
					<figcaption class='figure-caption'>
					We process your personal data for the following purposes: <br><br>
					- To provide you with information related to the products and services offered by our company
					and detailed in this web site.<br>
					- Hire our services by accepting the corresponding quote / order and / or signing a commercial
					contract.<br>
					- Send you by email and / or post news and developments about our entity, as well as updates to
					our catalog of products and services.
					</figcaption><br>
					<h4>2.1. Conservation period of your data</h4>
					<figcaption class='figure-caption'>
					We will keep your personal data from the moment you give us your consent until you revoke it or request the limitation of the treatment. In such cases, we will keep your data in a blocked way for the legally required deadlines.
					</figcaption><br>
					<h3>3. LEGITIMACY AND DATA COLLECTED</h3>
					<figcaption class='figure-caption'>
					The legitimacy for the treatment of your data is the express consent given by means of a positive and affirmative act (fill in the corresponding form and tick the box of acceptance of this policy) at the moment of providing us with your personal data.
					</figcaption><br>
					<h4>3.1. Consent to process your data</h4>
					<figcaption class='figure-caption'>
					By filling in the forms, checking the box 'I accept the Privacy Policy' and clicking to send the data, or by sending e-mails to the Company through the accounts set up for this purpose, the User declares having read and expressly accepted this privacy policy, and gives his unequivocal and express consent to the processing of their personal data in accordance with the purposes indicated.  
					</figcaption><br>
					<h4>3.2. Categories of data</h4>
					<figcaption class='figure-caption'>
					The data collected refers to the category of identifying data, such as: Name and Surname, Telephone, Postal Address, Company, Email, as well as the IP address from which you access the data collection form.
					</figcaption><br>
					<h3>4. SECURITY MEASURES</h3>
					<figcaption class='figure-caption'>
					As part of our commitment to guarantee the security and confidentiality of your personal data, we inform you that the necessary technical and organisational measures have been adopted to guarantee the security of personal data and to avoid its alteration, loss, unauthorised treatment or access, taking into account the state of technology, the nature of the stored data and the risks to which it is exposed, according to Art. 32 of the RGPD EU 679/2016.
					</figcaption><br>
					<h3>5. DATA TRANSFER</h3>
					<figcaption class='figure-caption'>
					No data transfers or international transfers of your data are envisaged, with the exception of those authorised by tax, mercantile and telecommunications legislation, as well as in those cases in which a judicial authority requires us to do so. 
					</figcaption><br>
					<h3>6. USER RIGHTS</h3>
					<figcaption class='figure-caption'>
					Any interested party has the right to obtain confirmation as to whether or not we are processing personal data concerning them. The persons concerned have the right to access their personal data and to request the rectification of inaccurate data or, where appropriate, to request its deletion when, among other reasons, the data are no longer necessary for the purposes for which
					they were collected. In certain circumstances, data subjects may request limitation of the processing of their data, in which case they will only be kept for the exercise or defence of claims. For reasons relating to their particular situation, data subjects may object to the processing of their data. The party responsible for the file shall cease to process the data, except for compelling legitimate reasons, or the exercise or defence of possible claims.<br><br>
					In accordance with current legislation, you have the following rights: the right to request access to
					your personal data, the right to request its rectification or deletion, the right to request the
					limitation of its processing, the right to object to its processing, the right to data portability and the right to revoke the consent granted. 
					</figcaption><br>
					<h4>6.1. How to exercise my rights?</h4>
					<figcaption class='figure-caption'>
					In order to exercise your rights, you must contact the person in charge, requesting the corresponding form for the exercise of the chosen right. Optionally, you can go to the competent Control Authority for additional information about your rights. The contact details for the exercise of your rights are telephone ".$telf." and e-mail: ".$mail_cont_empresa.". Remember to accompany a copy of a document that allows us to identify you.
					</figcaption><br>
					<h3>7. CONSENT TO SEND ELECTRONIC COMMUNICATIONS</h3>
					<figcaption class='figure-caption'>
					Likewise, and in accordance with the provisions of Law 34/2002, of July 11, Services Information Society and Electronic Commerce, by completing the data collection form and checking the appropriate box 'I accept the sending of electronic communications', is giving express consent to send to your email address, telephone, fax or other electronic means in sending information about the Company.
					</figcaption><br>
			";


		$cook = "Cookies Policy";
		$parr_cook = "<h3>1. ANTECEDENTS</h3>
					<figcaption class='figure-caption'>
					In accordance with Spanish legislation governing the use of cookies in relation to the provision of electronic communications services, contained in Royal Decree Law 13/2012of 30 March, we inform you about the cookies used on the website of ".$empresa_titular." and the reason for their use. It also informs you that by browsing the Website you are giving your consent to be able to use them.
					</figcaption><br><br>
					<h3>2. WHAT ARE COOKIES?</h3>
					<figcaption class='figure-caption'>
					A cookie is a file that is downloaded to your computer when you access certain web pages. Cookies allow a website, among other things, to store and retrieve information about a user's or computer's browsing habits and, depending on the information they contain and how you use your computer, may be used to recognize the user. Cookies are only associated with an anonymous
					user and their computer or device and do not provide references that allow you to know their personal data. 
					</figcaption><br><br>
					<h3>3. TYPES OF COOKIES</h3>
					<figcaption class='figure-caption'>
					1.- Own Cookies: These are those that are sent to the user's terminal equipment from a computer or domain managed by the publisher and from which the service Requested by the user is provided.<br><br>
					2.- Third-party Cookies: These are those that are sent to the user's terminal equipment from a
					computer or domain that is not managed by the publisher, but by another entity that processes the
					data obtained through cookies.<br><br>
					3.- Session Cookies: Are a type of cookies designed to collect and store data while the user accesses
					a website.<br><br>
					4.- Persistent Cookies: They are a type of cookie in which the data is still stored in the terminal
					and can be accessed and processed for a period defined by the person responsible for the cookie,
					which can range from a few minutes to several years. <br><br>
					5.- Analysis Cookies: These are those which, whether processed by us or by third parties, allow
					us to quantify the number of users and thus carry out the measurement and statistical analysis of
					the use made by users of the service offered. In order to do this, your navigation on our website is
					analysed in order to improve the range of products or services we offer you.<br><br>
					6.- Advertising Cookies: These are those that allow the management, in the most efficient way
					possible, of the advertising spaces that, where appropriate, the publisher has included in a website,
					application or platform from which it provides the service requested based on criteria such as the
					content edited or the frequency in which the ads are displayed.<br><br>
					7.- Behavioral advertising cookies: These are those that allow the management, in the most
					efficient way possible, of the advertising spaces that, where appropriate, the publisher has included
					in a website, application or platform from which it provides the service requested. It is also possible that when you visit a web page or open an email where an advertisement or promotion about our products or services is published, a cookie may be installed in your browser that serves to show you advertising related to the search you have carried out, develop a control of our advertisements in relation to, for example, the number of times they are seen, where they appear, what time they are seen, etc.
					</figcaption><br><br>
					<h3>4. TYPES OF COOKIES USED BY THIS WEBSITE</h3>
					<figcaption class='figure-caption'>
					The cookies used on our website are session and third party, and allow us to store and access
					information regarding the language, the type of browser used, and other general characteristics
					predefined by the user, as well as follow and analyze the activity carried out, in order to introduce
					improvements and provide our services in a more efficient and personalized. ".$empresa_titular." does not use advertising cookies or behavioural advertising.<br><br>
					The use of cookies offers advantages in the provision of services within what is known as the
					information society, since it facilitates the user's navigation and access to the different services
					offered by this website; it avoids the user having to configure the predefined general characteristics each time he accesses the website; it favours the improvement of the functioning and services provided through this website, after the corresponding analysis of the information obtained through the cookies installed.<br><br>

					<style type='text/css'>
						.tabla-cookies td {
							border: 1px solid #999;
							border-collapse: collapse;
							font-size: 0.8em;
							/*vertical-align: top;*/
						}
						.tabla-cookies #cab {
							background-color: #F0F8FF;
						}

						.cook:hover{
							color: #8A2BE2;
						}										
					</style>

					<table class='tabla-cookies' width='100%' cellpadding='10' cellspacing='0'>
				  <tr>
				    <td class='text-center' id='cab'>First name</td>
				    <td class='text-center' id='cab'>Type</td>
				    <td class='text-center' id='cab'>Expiry date</td>
				    <td class='text-center' id='cab'>Purpose</td>
				    <td class='text-center' id='cab'>Class</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utma</td>
				    <td class='text-center'>Third Party (Google Analytics)</td>
				    <td class='text-center'>2 years</td>
				    <td class='text-center'>It is used to distinguish users and sessions.</td>
				    <td class='text-center'>Not Exempt</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmb</td>
				    <td class='text-center'>Third Party (Google Analytics)</td>
				    <td class='text-center'>30 minutes</td>
				    <td class='text-center'>It is used to determine new sessions or visits.</td>
				    <td class='text-center'>Not Exempt</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmc</td>
				    <td class='text-center'>Third Party (Google Analytics)</td>
				    <td class='text-center'>At the end of the session</td>
				    <td class='text-center'>It is configured for use with Urchin.</td>
				    <td class='text-center'>Not Exempt</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmz</td>
				    <td class='text-center'>Third Party (Google Analytics)</td>
				    <td class='text-center'>6 months</td>
				    <td class='text-center'>Stores the origin or the campaign that explains how the user got to the website.</td>
				    <td class='text-center'>Not Exempt</td>
				  </tr>				  
					</table>
					</figcaption><br><br>
					<h3>5. REVOCATION AND DELETION OF COOKIES</h3>
					<figcaption class='figure-caption'>
					At any time you can access the configuration of your browser by accepting or rejecting all cookies, or select those whose installation allows and those not, following one of the following procedures, depending on the browser you use:<br><br>

					<b>Google Chrome</b> (in the Tools Menu)<br>
					Settings > Show advanced options > Privacy (Content Settings) > Cookies<br>
					More information: <a class='cook' href='https://support.google.com/chrome/answer/95647?hl=es'>https://support.google.com/chrome/answer/95647?hl=es</a> <br><br>

					<b>Microsoft Internet Explorer</b> (in the Tools Menu)<br>
					Internet Options > Privacy > Advanced<br>
					More information: <a class='cook' href='http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-9 '>http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-9 </a><br><br>

					<b>Firefox</b><br>
					Options > Privacy > Cookies<br>
					More information: <a class='cook' href='http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we'>http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a><br><br> 

					<b>Safari, iPad e iPhone</b><br>
					Preferences > Privacy<br>
					More information: <a class='cook' href='http://www.apple.com/es/privacy/use-of-cookies/'>http://www.apple.com/es/privacy/use-of-cookies/</a><br><br>

					<b>Opera</b><br>
					Configuration > Options > Advanced > Cookies<br>
					More information: <a class='cook' href='http://help.opera.com/Linux/10.60/es-ES/cookies.html'>http://help.opera.com/Linux/10.60/es-ES/cookies.html</a> 
					</figcaption><br><br>

					<h3>6. THIRD PARTY SERVICE PROVIDERS</h3>
					<figcaption class='figure-caption'>
					Specifically, third party service providers with whom we have contracted some service for which it is
					necessary to use cookies are:<br><br>

					<table class='tabla-cookies' width='100%' cellpadding='10' cellspacing='0'>
					<tr>
						<td class='text-center' id='cab'>Vendor</td>
						<td class='text-center' id='cab'>Purpose of Service and Cookie</td>
						<td class='text-center' id='cab'>Provider Information</td>
					</tr>
					<tr>
						<td class='text-center'>GOOGLE Inc.</td>
						<td class='text-center'>Statistical analysis of the website at the level of visitor count, pages visited, keywords used and the like</td>
						<td class='text-center'><a class='cook' href='http://www.google.es/intl/es/policies/privacy/'>http://www.google.es/intl/es/policies/privacy/</a></td>
					</tr>
					</table>
					</figcaption><br><br>
			";

		$av_cook = "We use our own and third-party cookies to improve our services and to be able to show you advertising related to your preferences by analyzing your browsing habits. If you go on surfing, we consider it as your agreement for its use. If you wish you can change the configuration or get more information.
		";
			
        break;
	
		case 'fra':
		
			$ini = "Accueil"; 
			$emp = "à propos de nous"; 
			$pro = "Produits"; 
			$con = "Contact"; 
			
			$esp = "esp"; 
			$txt_esp = "espagnol"; 
			$cat = "cat"; 
			$txt_cat = "Catala"; 
			$ing = "ing"; 
			$txt_ing = "Inglés"; 
			$fra = "fra"; 
			$txt_fra = "Français"; 
			$deu = "deu"; 
			$txt_deu = "Deutsch"; 
			$ita = "ita"; 
			$txt_ita = "italien"; 
			
			$texti = "Échantillons textiles"; 
			$avi = "Mentions Légales"; 
			$pol = "Politique de Confidentialité"; 
			$sig = "Suivez-nous"; 
			$cont = "Contact"; 

			$empresa_titular = "DETAILS HOUSE S.L.";
			$cif_empresa = "B73303281";
			$direccion_empresa = "P.I. LAS TERESAS, C/ MIGUEL SERVET, PARC B16, APDO 562";
			$poblacion_empresa = "YECLA";
			$cp_empresa = "30510";
			$provincia_empresa = "MURCIA";
			$telf = "968752693";
			$mail_cont_empresa = "dori.guaita@rafaelortega.es";
			$host = "rafaelortega.es";
			$inscripcion_reg = "inscrit au Registre du Commerce de Murcia, Volume 2100, Livre 0, Folio 218, 1er enregistrement";
			
			$dest = "Produits à la une"; 
			$antes = "avant"; 
			$con_pre = "+ info"; 
			
		$nosot = "Histoire";		 
		$txtempresa1 = "<p style='font-size: 14px; line-height: 1.5em'>
		Commençant notre histoire au début des années 90, Tapizados Rafael Ortega peut dire qu'elle est aujourd'hui l'une des entreprises les plus dynamiques et les plus attractives du secteur des meubles rembourrés en Espagne. <br /> <br />
		Sa vocation pour ce secteur, la maîtrise de l'ensemble du processus de production et le travail quotidien continu basé sur les équipes humaines et l'innovation, ont fait de Tapizados Rafael Ortega aujourd'hui une des gammes de produits les plus adaptées et les plus étendues en ce qui concerne aux modèles, structures et tissus fait référence. <br /> <br />
		D'autre part, la maîtrise de l'ensemble de la chaîne de valeur confère à Tapizados Rafael Ortega une compétitivité maximale, ce qui permet à l'entreprise d'apporter une vision internationale. <br /> <br />
		La conclusion est que les familles comme des canapés classiques, d'avant-garde, coin, chaisslongues, fauteuils, couché, se détendre, extractibles, diodes électroluminescentes, etc. collectionnez parfaitement l'idée de son créateur Rafael Ortega.

        </p>";
		$mision = "Mission";			
		$txtempresa2 = "<p style='font-size: 14px; line-height: 1.5em'>
		Répondre aux besoins d'ameublement de la société, principalement dans le secteur du rembourrage, en fournissant à nos clients des produits de qualité à un prix abordable.

        </p>";
		$vision = "Vision";
		$txtempresa3 = "<p style='font-size: 14px; line-height: 1.5em'>
		Être une entreprise familiale, une référence dans le secteur, avec une vision internationale et en essayant constamment de dépasser les attentes de nos clients. <br /> <br />
		Nous croyons que le succès de notre service provient du choix de notre personnel qui a de l'expérience, la proximité avec le client et la vocation, ce qui nous permet d'être une entreprise agile, sérieuse et respectable et d'être attentif aux changements et aux demandes que le marché exige.

        </p>";
		$valores = "Les valeurs";
		$txtempresa4 = "<p style='font-size: 14px; line-height: 1.5em'>
		Proactivité et participation apportées par notre personnel, piliers de la croissance réussie de notre organisation. <br /> <br />
		Effort et dévouement accompagnant nos clients. <br /> <br />
		Contact direct avec nos clients à tout moment. <br /> <br />
		Écologique. <br /> <br />
		Engagement envers les résultats.<br /><br />
		Responsabilité sociale.<br /><br />
		Travail en équipe.<br /><br />
		Ergonomie.<br /><br />
		
        </p>";		
		$innovacion = "L'innovation";
		$txtidi1 = "De nos jours, pour satisfaire la demande de consommation, il est nécessaire de s'adapter aux nouvelles demandes du consommateur. Parmi eux, l'intégration des loisirs et de la détente. Les défis de l'innovation se produisent parce que la technologie nous permet de profiter des loisirs à la maison, tout en analysant les différents modes de vie qui nous conduisent à détecter et à répondre aux besoins présents et futurs. <br /> <br />
		De plus, l'utilisation de matériaux non polluants, de déchets sans fumée et biodégradables est une condition indispensable au développement durable. <br /> <br />
		La qualité, la sécurité du domicile, le souci de l'environnement, la durabilité, entre autres, sont des valeurs qui constituent la base du développement futur d'une société moderne et avec elle celle des entreprises. <br /> <br />
		Ainsi, conscient de cela, Tapizados Rafael Ortega, maintient tout au long de son organisation, des valeurs visant une politique I + D + I active et moderne qui permet à l'entreprise d'être en développement permanent. <br /> <br />
		";
		$calidad = "La qualité";
		$txtidi2 = "Notre objectif principal est d'atteindre la satisfaction de tous nos clients, sans exception.<br /><br />
		Pour ce faire, nous utilisons la plus haute qualité dans la fabrication de nos produits, garantissant leur durabilité et leur résistance. Un objectif qui est atteint avec la validation de tous nos produits sur la base de normes internationales qui testent à la fois les composants et le produit final en utilisation, durabilité et nettoyage dans le temps.
		";
			
			$localiz = "Contact et Situation"; 
			$formul = "Formulaire de contact"; 
			$nomb = "Nom"; 
			$pers = "Contact"; 
			$telef = "Téléphone"; 
			$mens = "Message"; 
			$oblig = "Tous les champs marqués d'un astérisque"; 
			$privacidad1 = "J'ai lu et accepte le "; 
			// $privacidad2 = "accepte notre"; 
			$privacidad3 = "Politique de Confidentialité"; 
			// $env = «Soumettre»; 
			$env = "Envoyer";
			
			$parr_legal = "<figcaption class='figure-caption'>
					Afin de se conformer à l'article 10 de la loi 34/2002 sur la société de l'information et du commerce électronique, nous informons l'utilisateur de nos données:

					<br><br>
					- Nom de l'entreprise: ".$empresa_titular."			
					<br><br>
					- Siège social: ".$direccion_empresa." - ".$cp_empresa." - ".$poblacion_empresa." - ".$provincia_empresa.".
					<br><br>
					- CIF: ".$cif_empresa.".			
					<br><br>
					- Téléphone: ".$telf.".
					<br><br>
					- Courriel: ".$mail_cont_empresa.". 
					<br><br>
					- Datos Registrales: ".$inscripcion_reg.".
					<br><br>
					- Site Web: www.".$host."
					
					
				</figcaption><br><br>
				<h3>Objet</h3>
				<figcaption class='figure-caption'>
					Le fournisseur, responsable du site web, met à la disposition des utilisateurs ce document qui vise à se conformer aux obligations de la Loi 34/2002 sur les services de la société de l'information et le commerce électronique (LSSI-CE), ainsi qu'à informer tous les utilisateurs du site web concernant les conditions d'utilisation du site.<br><br>
Toute personne accédant à ce site web assume le rôle d'utilisateur, s'engageant au respect et à la stricte conformité aux dispositions des présentes, ainsi qu'à toute autre disposition légale qui pourrait être applicable.<br><br>
Le fournisseur se réserve le droit de modifier toute information susceptible d'apparaître sur le site, sans qu'il n'y ait aucune obligation de notification préalable ou d'information des utilisateurs de ces obligations, considérées comme suffisantes avec la publication sur le site du fournisseur.
				</figcaption><br><br>

				<h3>Responsabilité</h3>
				<figcaption class='figure-caption'>
					Le fournisseur décline toute responsabilité quant aux informations publiées sur son site Web, à condition que ces informations aient été manipulées ou introduites par un tiers en dehors de celui-ci.<br><br>
Le site Web du fournisseur peut utiliser des cookies (petits fichiers d'informations que le serveur envoie à l'ordinateur de la personne qui accède à la page) pour effectuer certaines fonctions jugées essentielles au bon fonctionnement et à la visualisation du site. Les cookies utilisés sur le site sont, en tout état de cause, de nature temporaire, dans le seul but de rendre leur transmission ultérieure plus efficace et de disparaître à la fin de la session de l'utilisateur. En aucun cas, les cookies ne seront utilisés pour collecter des informations personnelles.<br><br>
À partir du site Web du client, vous pouvez être redirigé vers du contenu provenant de sites Web de tiers. Etant donné que le fournisseur ne peut pas toujours contrôler le contenu introduit par des tiers sur leurs sites web, il n'assume aucune responsabilité pour ce contenu. En tout état de cause, le fournisseur déclare qu'il procédera au retrait immédiat de tout contenu susceptible de porter atteinte au droit national ou international, à la morale ou à l'ordre public, en procédant au retrait immédiat de la redirection vers le site web, en portant le contenu en question à la connaissance des autorités compétentes.<br><br>
Le fournisseur n'est pas responsable des informations et du contenu stockés, y compris, mais sans s'y limiter, les forums, chats, générateurs de blogs, commentaires, réseaux sociaux ou tout autre moyen permettant à des tiers de publier du contenu indépendamment sur le site Web du fournisseur. Néanmoins, et conformément aux dispositions des articles 11 et 16 de la LSSI-CE, le fournisseur se met à la disposition de tous les utilisateurs, autorités et forces de sécurité, et collabore activement au retrait ou au blocage de tout contenu qui pourrait affecter ou contrevenir à la législation nationale ou internationale, aux droits des tiers ou à la morale et l'ordre public. Si l'utilisateur considère qu'il y a un contenu sur le site Web qui pourrait être sensible à cette classification, veuillez en aviser immédiatement l'administrateur du site Web.<br><br>
Ce site Web a été revu et testé pour en vérifier le bon fonctionnement. En principe, le bon fonctionnement peut être garanti 365 jours par an, 24 heures sur 24. Toutefois, le fournisseur n'exclut pas la possibilité qu'il y ait certaines erreurs de programmation, des cas de force majeure, des catastrophes naturelles, des grèves ou des circonstances similaires qui rendent l'accès au site impossible.
				</figcaption><br><br>
				<h3>Propriété intellectuelle et industrielle</h3>
				<figcaption class='figure-caption'>
Tous les contenus du site Web - tels que textes, graphiques, photographies, logos, icônes, images, ainsi que graphismes, codes sources et logiciels - sont la propriété exclusive de MsWeb Coop. Val., ou des tiers dont les droits appartiennent légitimement à MsWeb Coop. Val., et sont protégés par les législations nationales et internationales.<br><br>
Quelle que soit l'utilisation à laquelle elles sont destinées, la reproduction totale ou partielle, l'utilisation, l'exploitation, la distribution et la commercialisation, nécessite en tout état de cause l'autorisation écrite préalable du fournisseur. Toute utilisation non autorisée au préalable par le fournisseur sera considérée comme une violation grave des droits de propriété intellectuelle ou industrielle de l'auteur.<br><br>
Les dessins, logos, textes et/ou graphiques extérieurs au fournisseur et pouvant apparaître sur le site appartiennent à leurs propriétaires respectifs, étant eux-mêmes responsables de toute controverse éventuelle qui pourrait survenir à leur égard. Dans tous les cas, le fournisseur a l'autorisation expresse et préalable de celui-ci.<br><br>
Le fournisseur N'AUTORISE PAS expressément que des tiers puissent rediriger directement vers le contenu spécifique du site Web, et doit en tout cas rediriger vers le site Web principal du fournisseur.<br><br>
Le fournisseur reconnaît en faveur de leurs titulaires les droits correspondants de propriété industrielle et intellectuelle, n'impliquant pas leur simple mention ou apparition sur le site web l'existence de tout droit ou responsabilité du fournisseur à leur égard, ni leur approbation, parrainage ou recommandation par celui-ci.<br><br>
Pour toute observation concernant d'éventuelles violations des droits de propriété intellectuelle ou industrielle, ainsi que sur tout contenu du site, vous pouvez le faire par le biais de l'e-mail suivant.
				</figcaption><br><br>
				<h3>Exactitude de l'information</h3>
				<figcaption class='figure-caption'>
					Toutes les informations fournies par l'Utilisateur doivent être véridiques. A cet effet, l'Utilisateur garantit l'authenticité des données communiquées à travers les formulaires d'abonnement aux Services. Il sera de la responsabilité de l'utilisateur de maintenir toutes les informations fournies à ".$empresa_titular." mise à jour en permanence afin qu'il réponde, à tout moment, à sa situation réelle. Dans tous les cas, l'Utilisateur sera seul responsable de toute déclaration fausse ou inexacte et des dommages causés au fournisseur ou à des tiers.
				</figcaption><br><br>

				<h3>Mineurs</h3>
				<figcaption class='figure-caption'>
					Pour utiliser les services, les mineurs doivent toujours obtenir le consentement préalable des parents, des tuteurs ou des représentants légaux, qui sont responsables en dernier ressort de tous les actes accomplis par les mineurs sous leur garde. C'est pourquoi, s'ils accèdent à des contenus inappropriés sur Internet, des mécanismes devront être mis en place dans leurs ordinateurs, notamment des programmes informatiques, des filtres et des blocs, qui permettent de limiter le contenu disponible et, bien qu'ils ne soient pas infaillibles, ils sont particulièrement utiles pour contrôler et restreindre les contenus auxquels les mineurs peuvent avoir accès.
				</figcaption><br><br>

				<h3>Obligation d'utiliser correctement le Web</h3>
				<figcaption class='figure-caption'>
					L'Utilisateur s'engage à utiliser le Site conformément à la Loi et aux présentes Mentions légales, ainsi qu'aux bonnes mœurs et usages. A cette fin, l'Utilisateur s'abstiendra d'utiliser le site à des fins illégales ou interdites, portant atteinte aux droits et intérêts de tiers, ou de toute manière pouvant endommager, désactiver, surcharger, altérer ou empêcher l'utilisation normale des équipements ou documents informatiques, fichiers et tous types de contenus stockés dans tout équipement informatique du fournisseur.<br><br>
En particulier, et à titre indicatif mais non exhaustif, l'Utilisateur s'engage à ne pas transmettre, diffuser ou mettre à disposition de tiers des informations, données, contenus, messages, graphiques, dessins, fichiers son ou image, photographies, enregistrements, logiciels et, d'une manière générale, tout type de matériel:<br><br>
(a) est contraire aux droits fondamentaux et aux libertés publiques reconnus dans la Constitution, les traités internationaux et autres règlements en vigueur, ne les respecte pas ou y porte atteinte;<br>
(b) incite à commettre des actes criminels, dénigrants, diffamatoires, violents ou, en général, contraires à la loi, aux bonnes mœurs et à l'ordre public, ou y incite ou les encourage;<br>
(c) induit, incite ou encourage des actions, attitudes ou pensées discriminatoires fondées sur le sexe, la race, la religion, les croyances, l'âge ou le statut;<br>
(d) est contraire au droit à l'honneur, à l'intimité personnelle ou familiale ou à l'image de soi des personnes;<br>
(e) porte atteinte de quelque manière que ce soit à la crédibilité du fournisseur ou des tiers; et<br>
(f) constitue une publicité illicite, trompeuse ou déloyale.
				</figcaption><br><br>

				<h3>Droit applicable et juridiction compétente</h3>
				<figcaption class='figure-caption'>
					Pour la résolution de toutes les controverses ou questions relatives au présent site web ou aux activités qui y sont développées, la législation espagnole sera d'application, à laquelle les parties sont soumises expressément, étant compétente pour la résolution de tous les conflits dérivés ou relatifs à son utilisation les Cours et Tribunaux de la YECLA.
				</figcaption><br><br>
			";
		

			
			$priv = "Politique de Confidentialité"; 
			$parr_priv = "<h3>1. LES DONNÉES DU RÉGULATEUR</h3>
				<figcaption class='figure-caption'>
					- Nom de l'entreprise: ".$empresa_titular." (ci-après, la &quot;Société&quot; ou la &quot;Partie Responsable&quot;). 			
					<br>
					- CIF: ".$cif_empresa.".			
					<br>
					- Adresse: ".$direccion_empresa." - ".$cp_empresa." - ".$poblacion_empresa." - ".$provincia_empresa.".
					<br>
					- Téléphone: ".$telf.".
					<br>
					- Courriel pour les communications relatives à la protection des données: ".$mail_cont_empresa.". 
										
				</figcaption><br>
				<h4>1.1. Législation applicable</h4>
				<figcaption class='figure-caption'>
					Notre politique de protection de la vie privée a été conçue conformément à la réglementation générale sur la protection des données de l'UE 2016/679 du Parlement européen et du Conseil, du 27 avril 2016, relative à la protection des personnes physiques à l'égard du traitement des données personnelles et à la libre circulation de ces données et abrogeant la directive 95/46/CE (réglementation générale sur la protection des données), et dans la mesure où elle ne contredit pas ladite réglementation, les dispositions du cadre législatif espagnol sur la protection des données personnelles.<br><br>  
En nous fournissant vos données, vous déclarez que vous avez lu et compris cette politique de confidentialité, en donnant votre consentement explicite et sans équivoque au traitement de vos données personnelles conformément aux finalités et conditions exprimées ici. <br><br>
La Société peut modifier cette politique de confidentialité pour l'adapter à la nouvelle législation, jurisprudence ou interprétation de l'Agence espagnole de protection des données. Ces conditions de confidentialité peuvent être complétées par l'Avis légal, la Politique sur les témoins et les Conditions générales qui, le cas échéant, sont recueillies pour certains produits ou services, si un tel accès implique une spécialité dans la protection des données personnelles. 
				</figcaption><br>
				<h4>1.2. Délégué à la protection des données</h4>
				<figcaption class='figure-caption'>
					La société n'a pas de Délégué à la protection des données.
				</figcaption><br>
				<h3>2. FINALITÉ DU TRAITEMENT DES DONNÉES PERSONNELLES</h3>
				<figcaption class='figure-caption'>
					Nous traitons vos données personnelles aux fins suivantes: <br><br>
- Vous fournir des informations relatives aux produits et services offerts par notre société et détaillées sur ce site web.<br>
- Faites appel à nos services en acceptant le devis / commande et / ou en signant un contrat commercial. <br>
- Vous envoyer par courriel et/ou poster des nouvelles et développements concernant notre entité, ainsi que des mises à jour de notre catalogue de produits et services.
				</figcaption><br>
				<h4>2.1. Durée de conservation de vos données</h4>
				<figcaption class='figure-caption'>
					Nous conserverons vos données personnelles à partir du moment où vous nous donnez votre consentement jusqu'à ce que vous le révoquiez ou demandiez la limitation du traitement. Dans ce cas, nous conserverons vos données bloquées pendant les périodes requises par la loi.
				</figcaption><br>

				<h3>3. LÉGITIMITÉ ET DONNÉES RECUEILLIES</h3>
				<figcaption class='figure-caption'>
					La légitimité du traitement de vos données est le consentement exprès donné au moyen d'un acte positif et affirmatif (remplir le formulaire correspondant et cocher la case d'acceptation de cette politique) au moment de nous fournir vos données personnelles. 
				</figcaption><br>
				<h4>3.1. Consentement au traitement de vos données</h4>
				<figcaption class='figure-caption'>
					En remplissant les formulaires, en cochant la case &quot;J'accepte la Politique de Confidentialité&quot; et en cliquant pour envoyer les données, ou en envoyant des e-mails à la Société à travers les comptes créés à cet effet, l'Utilisateur déclare avoir lu et expressément accepté cette politique de confidentialité, et donne son consentement explicite et sans équivoque au traitement de ses données personnelles conformément aux fins indiquées.  
				</figcaption><br>
				<h4>3.2. Catégories de données</h4>
				<figcaption class='figure-caption'>
					Les données collectées se réfèrent à la catégorie de données d'identification, telles que : Nom et prénom, Téléphone, Adresse postale, Société, Email, ainsi que l'adresse IP à partir de laquelle vous accédez au formulaire de collecte de données.
				</figcaption><br>

				<h3>4. MESURES DE SÉCURITÉ</h3>
				<figcaption class='figure-caption'>
					Dans le cadre de notre engagement à garantir la sécurité et la confidentialité de vos données personnelles, nous vous informons que les mesures techniques et organisationnelles nécessaires ont été adoptées pour garantir la sécurité des données personnelles et éviter leur altération, perte, traitement ou accès non autorisé, en tenant compte de l'état de la technologie, de la nature des données stockées et des risques auxquels elles sont exposées, selon l'article 32 du RGPD UE 679/2016.
				</figcaption><br>
				<h3>5. TRANSFERT DE DONNÉES</h3>
				<figcaption class='figure-caption'>
					Aucun transfert de données ou transfert international de vos données n'est envisagé, à l'exception de ceux autorisés par la législation fiscale, commerciale et des télécommunications, ainsi que dans les cas où une autorité judiciaire nous y oblige. 
				</figcaption><br>
				<h3>6. DROITS DE L'UTILISATEUR</h3>
				<figcaption class='figure-caption'>
					Toute personne intéressée a le droit d'obtenir la confirmation que nous traitons ou non des données personnelles la concernant. Les personnes concernées ont le droit d'accéder à leurs données à caractère personnel et de demander la rectification de données inexactes ou, le cas échéant, leur suppression lorsque, entre autres raisons, les données ne sont plus nécessaires aux fins pour lesquelles elles ont été collectées. Dans certaines circonstances, les personnes concernées peuvent demander la limitation du traitement de leurs données, auquel cas elles ne seront conservées que pour l'exercice ou la défense de leurs droits. Pour des raisons liées à leur situation particulière, les personnes concernées peuvent s'opposer au traitement de leurs données. Le responsable du fichier cesse de traiter les données, sauf pour des raisons impérieuses et légitimes, ou pour l'exercice ou la défense d'éventuelles réclamations.<br><br>
Conformément à la législation en vigueur, vous disposez des droits suivants : le droit de demander l'accès à vos données personnelles, le droit de demander leur rectification ou leur suppression, le droit de demander la limitation de leur traitement, le droit de s'opposer à leur traitement, le droit à la portabilité des données et le droit de retirer le consentement accordé. 
				</figcaption><br>
				<h4>6.1. Comment exercer mes droits?</h4>
				<figcaption class='figure-caption'>
				Pour exercer vos droits, vous devez vous adresser au responsable en lui demandant le formulaire correspondant à l'exercice du droit choisi. Si vous le souhaitez, vous pouvez vous adresser à l'autorité de contrôle compétente pour obtenir des informations complémentaires sur vos droits. Les coordonnées pour l'exercice de vos droits sont téléphone: ".$telf." et e-mail: ".$mail_cont_empresa.". N'oubliez pas d'accompagner une copie d'un document qui nous permet de vous identifier.
				</figcaption><br>
				<h3>7. CONSENTEMENT À L'ENVOI DE COMMUNICATIONS ÉLECTRONIQUES</h3>
				<figcaption class='figure-caption'>
					De même, et conformément aux dispositions de la loi 34/2002, du 11 juillet, sur les services de la société de l'information et du commerce électronique, en remplissant le formulaire de collecte de données et en cochant la case appropriée &quot;J'accepte l'envoi de communications électroniques&quot;, donne son consentement explicite à envoyer à votre adresse e-mail, téléphone, fax ou autres moyens électroniques pour envoyer des informations sur la Société.
				</figcaption><br>
			" ;

		$cook = "Politique de Cookies";
		$parr_cook = "<h3>1. ANTÉCÉDENTS</h3>
				<figcaption class='figure-caption'>
					Conformément à la législation espagnole régissant l'utilisation des cookies dans le cadre de la fourniture de services de communications électroniques, contenue dans le Décret Royal 13/2012 du 30 mars, nous vous informons sur les cookies utilisés sur le site Web de ".$empresa_titular." et la raison de leur utilisation. Il vous informe également qu'en naviguant sur le Site, vous donnez votre consentement pour pouvoir les utiliser.

				</figcaption><br><br>
				<h3>2. QUE SONT LES COOKIES?</h3>
				<figcaption class='figure-caption'>
					Un cookie est un fichier qui est téléchargé sur votre ordinateur lorsque vous accédez à certaines pages Web. Les cookies permettent à un site Web, entre autres, de stocker et de récupérer des informations sur les habitudes de navigation d'un utilisateur ou d'un ordinateur et, selon les informations qu'ils contiennent et la façon dont vous utilisez votre ordinateur, peuvent être utilisés pour reconnaître l'utilisateur. Les cookies ne sont associés qu'à un utilisateur anonyme et à son ordinateur ou appareil et ne fournissent pas de références qui vous permettent de connaître ses données personnelles. 
				</figcaption><br><br>

				<h3>3. TYPES DE COOKIES</h3>
				<figcaption class='figure-caption'>
					
					1.- Cookies propres: Ce sont ceux qui sont envoyés à l'équipement terminal de l'utilisateur à partir d'un ordinateur ou d'un domaine géré par l'éditeur et à partir duquel le service demandé par l'utilisateur est fourni.<br><br>
2.- Cookies de tiers: Ce sont ceux qui sont envoyés à l'équipement terminal de l'utilisateur à partir d'un ordinateur ou d'un domaine qui n'est pas géré par l'éditeur, mais par une autre entité qui traite les données obtenues par les cookies.<br><br>
3.- Cookies de session: Il s'agit d'un type de cookies conçus pour collecter et stocker des données
pendant que l'utilisateur accède à un site Web.<br><br>
4.- Cookies persistants: Il s'agit d'un type de cookie dans lequel les données sont encore stockées dans le terminal et peuvent être consultées et traitées pendant une période définie par la
personne responsable du cookie, qui peut varier de quelques minutes à plusieurs années. <br><br>
5.- Cookies d'analyse : Ce sont ceux qui, qu'ils soient traités par nous ou par des tiers, nous
permettent de quantifier le nombre d'utilisateurs et d'effectuer ainsi la mesure et l'analyse
statistique de l'utilisation faite par les utilisateurs du service offert. Pour ce faire, votre navigation sur notre site Internet est analysée afin d'améliorer la gamme de produits ou services que nous vous proposons.<br><br>
6.- Cookies publicitaires: Ce sont ceux qui permettent la gestion la plus efficace possible des
espaces publicitaires que l'éditeur a inclus, le cas échéant, dans un site web, une application ou
une plate-forme à partir de laquelle il fournit le service demandé, en fonction de critères tels que le contenu édité ou la fréquence à laquelle les annonces sont affichées.<br><br>
7.- Les cookies publicitaires comportementaux: Ce sont ceux qui permettent la gestion la plus
efficace possible des espaces publicitaires que l'éditeur a inclus, le cas échéant, dans un site web, une application ou une plate-forme à partir desquels il fournit le service demandé. Il est également possible que lorsque vous visitez une page Web ou ou ouvrez un courriel où une publicité ou une promotion de nos produits ou services est publiée, un témoin s'installe dans votre navigateur afin de vous montrer de la publicité liée à la recherche que vous avez effectuée, de développer un contrôle de nos publicités en fonction, par exemple, du nombre de fois où elles sont vues, de leur emplacement, de l'heure où elles sont affichées, etc.
				</figcaption><br><br>

				<h3>4. TYPES DE COOKIES UTILISÉS PAR CE SITE WEB</h3>
				<figcaption class='figure-caption'>
					Les cookies utilisés sur notre site sont des cookies de session et de tiers, et nous permettent de stocker et d'accéder à des informations concernant la langue, le type de navigateur utilisé, et d'autres caractéristiques générales prédéfinies par l'utilisateur, ainsi que suivre et analyser l'activité effectuée, afin d'apporter des améliorations et fournir nos services dans un plus efficace et personnalisée. ".$empresa_titular." n'utilise pas de cookies publicitaires ou de publicité comportementale.<br><br>
L'utilisation de cookies offre des avantages dans la fourniture de services au sein de ce que l'on
appelle la société de l'information, car elle facilite la navigation de l'utilisateur et l'accès aux
différents services offerts par ce site Web ; elle évite à l'utilisateur d'avoir à configurer les
caractéristiques générales prédéfinies à chaque accès au site Web ; elle favorise l'amélioration du
fonctionnement et des services fournis par ce site, après analyse correspondante des informations
obtenues par les cookies installés.<br><br>

<style type='text/css'>
					.tabla-cookies td {
						border: 1px solid #999;
						border-collapse: collapse;
						font-size: 0.8em;
						/*vertical-align: top;*/
					}
					.tabla-cookies #cab {
						background-color: #F0F8FF;
					}

					.cook:hover{
						color: #8A2BE2;
					}
					
				</style>


<table class='tabla-cookies' width='100%' cellpadding='10' cellspacing='0'>
				  
				  <tr>
				    <td class='text-center' id='cab'>Prénom</td>
				    <td class='text-center' id='cab'>Type</td>
				    <td class='text-center' id='cab'>Date d'expiration</td>
				    <td class='text-center' id='cab'>Objet</td>
				    <td class='text-center' id='cab'>Catégorie</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utma</td>
				    <td class='text-center'>Tiers (Google Analytics)</td>
				    <td class='text-center'>2 ans</td>
				    <td class='text-center'>Il est utilisé pour distinguer les utilisateurs et les sessions.</td>
				    <td class='text-center'>Non exempté</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmb</td>
				    <td class='text-center'>Tiers (Google Analytics)</td>
				    <td class='text-center'>30 minutes</td>
				    <td class='text-center'>Il est utilisé pour déterminer de nouvelles sessions ou visites.</td>
				    <td class='text-center'>Non exempté</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmc</td>
				    <td class='text-center'>Tiers (Google Analytics)</td>
				    <td class='text-center'>A la fin de la session</td>
				    <td class='text-center'>Il est configuré pour être utilisé avec Urchin.</td>
				    <td class='text-center'>Non exempté</td>
				  </tr>
				  <tr>
				    <td class='text-center'>__utmz</td>
				    <td class='text-center'>Tiers (Google Analytics)</td>
				    <td class='text-center'>6 mois</td>
				    <td class='text-center'>Stocke l'origine ou la campagne qui explique comment l'utilisateur est arrivé sur le site.</td>
				    <td class='text-center'>Non exempté</td>
				  </tr>
				  
				</table>

				</figcaption><br><br>
				<h3>5. RÉVOCATION ET SUPPRESSION DES COOKIES</h3>
				<figcaption class='figure-caption'>
					Vous pouvez à tout moment accéder à la configuration de votre navigateur en acceptant ou en refusant tous les cookies, ou en sélectionnant ceux dont l'installation est autorisée ou non, en suivant l'une des procédures suivantes, selon le navigateur que vous utilisez:<br><br>

<b>Google Chrome</b> (dans le menu Outils)<br>
Paramètres > Afficher les options avancées > Confidentialité (Paramètres du contenu) > Cookies<br>
Plus d'informations: <a class='cook' href='https://support.google.com/chrome/answer/95647?hl=es'>https://support.google.com/chrome/answer/95647?hl=es</a> <br><br>

<b>Microsoft Internet Explorer</b> (dans le menu Outils)<br>
Options Internet > Confidentialité > Advanced<br>
Plus d'informations: <a class='cook' href='http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-9 '>http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-9 </a><br><br>

<b>Firefox</b><br>
Options > Confidentialité > Cookies<br>
Plus d'informations: <a class='cook' href='http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we'>http://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a><br><br> 

<b>Safari, iPad e iPhone</b><br>
Preferences > Confidentialité<br>
Plus d'informations: <a class='cook' href='http://www.apple.com/es/privacy/use-of-cookies/'>http://www.apple.com/es/privacy/use-of-cookies/</a><br><br>

<b>Opera</b><br>
Configuration > Options > Avancées > Cookies<br>
Plus d'informations: <a class='cook' href='http://help.opera.com/Linux/10.60/es-ES/cookies.html'>http://help.opera.com/Linux/10.60/es-ES/cookies.html</a> 
				</figcaption><br><br>

				<h3>6. FOURNISSEURS DE SERVICES TIERS</h3>
				<figcaption class='figure-caption'>
					En particulier, les fournisseurs de services tiers avec lesquels nous avons contracté certains services pour lesquels il est nécessaire d'utiliser des cookies le sont:<br><br>

				<table class='tabla-cookies' width='100%' cellpadding='10' cellspacing='0'>
				<tr>
				    <td class='text-center' id='cab'>Vendeur</td>
				    <td class='text-center' id='cab'>But du service et cookie</td>
				    <td class='text-center' id='cab'>Renseignements sur le fournisseur</td>
 				</tr>
 				<tr>
				    <td class='text-center'>GOOGLE Inc.</td>
				    <td class='text-center'>Analyse statistique du site web au niveau du nombre de visiteurs, des pages visitées, des mots-clés utilisés, etc.</td>
				    <td class='text-center'><a class='cook' href='http://www.google.es/intl/es/policies/privacy/'>http://www.google.es/intl/es/policies/privacy/</a></td>
 				</tr>

 				</table>

				</figcaption><br><br>
			" ;

			$av_cook = "Nous utilisons des cookies propriétaires et de tierces parties pour améliorer nos services et pour vous montrer de la publicité liée à vos préférences en analysant vos habitudes de navigation. Si vous continuez à naviguer, nous considérons que vous acceptez son utilisation. Vous pouvez modifier les paramètres ou obtenir plus d'informations ";
		
		break;
		
	}
?>