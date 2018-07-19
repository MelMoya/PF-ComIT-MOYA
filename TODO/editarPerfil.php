<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styleEditarPerfil2.css">
	<link rel="stylesheet" type="text/css" href="styleMenuCSesion2.css">
	<link rel="stylesheet" type="text/css" href="styleFooter.css">
</head>
<body>
	<div class="menu">
		<?php
		session_start();
		$_SESSION["iniciada"] = 0; //NO
			if ($_SESSION["iniciada"]==$_SESSION["sIniciada"]){
				header("location: necesitaSession.php");
			}
			else {
				include'menuCSesion.php';
			}
		?>
	</div>
		<div class="classEditar">
			<div class="row" id="rowBody">
				<div class="col-sm-1"></div>
				<div class="col-sm-3" id="colFoto">
					<img src="/imagenes/fotoPerfil/<?php echo $_SESSION['foto_User']; ?>" alt="fotoUsuario" class="img-circle">
					<form class="form-horizontal" action="cambiarFoto.php" enctype="multipart/form-data" method="post">
						<fieldset>
							<!-- File Button -->
							<div class="form-group" id="claseButton">
							  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cambiar</button>
							  <br>
							  <br>
							  <input id="filebutton" name="inputImagen" class="input-file" type="file">
							</div>
						</fieldset>
					</form>
				</div>

				<div class="col-sm-8" id="colForm">
					<form class="form-horizontal" action="modificar.php" enctype="multipart/form-data" method="post">
						<fieldset>

							<!-- Form Name -->
							<legend><h3>Datos Personales</h3></legend>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Usuario </label>
							  <div class="col-md-4">
							  <input id="textinput" name="nickName" type="text" placeholder="Nombre de usuario" class="form-control input-md" value="<?php echo $_SESSION['nick_User']; ?>">

							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Nombre y Apellido</label>
							  <div class="col-md-4">
							  	<input id="textinput" name="nomYap" type="text" placeholder="Nombre y Apellido" class="form-control input-md" value="<?php echo $_SESSION['nombreCompleto_User']; ?>">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Email</label>
							  <div class="col-md-4">
							  	<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $_SESSION['email_User']; ?>" disabled>
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Contraseña</label>
							  <div class="col-md-4">
							  	<input type="textinput" class="form-control" id="contrasenia" placeholder="Enter contraseña" name="pswd" value="<?php echo $_SESSION['contrasenia_User']; ?>">
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="selectbasic">Pais</label>

							  <div class="col-md-4">
							    <select id="selectbasic" name="pais" class="form-control" value="<?php echo $_SESSION['pais_User']; ?>" name="pais">
							      <option value="1" <?php if ($_SESSION['pais_User']=="1") echo "selected"; ?>>Afganistán</option>
							      <option value="2" <?php if ($_SESSION['pais_User']=="2") echo "selected"; ?>>Albania</option>
							      <option value="3" <?php if ($_SESSION['pais_User']=="3") echo "selected"; ?>>Alemania</option>
							      <option value="4" <?php if ($_SESSION['pais_User']=="4") echo "selected"; ?>>Andorra</option>
							      <option value="5" <?php if ($_SESSION['pais_User']=="5") echo "selected"; ?>>Angola</option>
							      <option value="6" <?php if ($_SESSION['pais_User']=="6") echo "selected"; ?>>Antigua y Barbuda</option>
							      <option value="7" <?php if ($_SESSION['pais_User']=="7") echo "selected"; ?>>Arabia Saudita</option>
							      <option value="8" <?php if ($_SESSION['pais_User']=="8") echo "selected"; ?>>Argelia</option>
							      <option value="9" <?php if ($_SESSION['pais_User']=="9") echo "selected"; ?>>Argentina</option>
							      <option value="10" <?php if ($_SESSION['pais_User']=="10") echo "selected"; ?>>Armenia</option>
							      <option value="11" <?php if ($_SESSION['pais_User']=="11") echo "selected"; ?>>Australia</option>
							      <option value="12" <?php if ($_SESSION['pais_User']=="12") echo "selected"; ?>>Austria</option>
							      <option value="13" <?php if ($_SESSION['pais_User']=="13") echo "selected"; ?>>Azerbaiyán</option>
							      <option value="14" <?php if ($_SESSION['pais_User']=="14") echo "selected"; ?>>Bahamas</option>
							      <option value="15" <?php if ($_SESSION['pais_User']=="15") echo "selected"; ?>>Bangladés</option>
							      <option value="16" <?php if ($_SESSION['pais_User']=="16") echo "selected"; ?>>Barbados</option>
							      <option value="17" <?php if ($_SESSION['pais_User']=="17") echo "selected"; ?>>Baréin</option>
							      <option value="18" <?php if ($_SESSION['pais_User']=="18") echo "selected"; ?>>Bélgica</option>
							      <option value="19" <?php if ($_SESSION['pais_User']=="19") echo "selected"; ?>>Belice</option>
							      <option value="20" <?php if ($_SESSION['pais_User']=="20") echo "selected"; ?>>Benín</option>
							      <option value="21" <?php if ($_SESSION['pais_User']=="21") echo "selected"; ?>>Bielorrusia</option>
							      <option value="22" <?php if ($_SESSION['pais_User']=="22") echo "selected"; ?>>Birmania</option>
							      <option value="23" <?php if ($_SESSION['pais_User']=="23") echo "selected"; ?>>Bolivia</option>
							      <option value="24" <?php if ($_SESSION['pais_User']=="24") echo "selected"; ?>>Bosnia y Herzegovina</option>
							      <option value="25" <?php if ($_SESSION['pais_User']=="25") echo "selected"; ?>>Botsuana</option>
							      <option value="26" <?php if ($_SESSION['pais_User']=="26") echo "selected"; ?>>Brasil</option>
							      <option value="27" <?php if ($_SESSION['pais_User']=="27") echo "selected"; ?>>Brunéi</option>
							      <option value="28" <?php if ($_SESSION['pais_User']=="28") echo "selected"; ?>>Bulgaria</option>
							      <option value="29" <?php if ($_SESSION['pais_User']=="29") echo "selected"; ?>>Burkina Faso</option>
							      <option value="30" <?php if ($_SESSION['pais_User']=="30") echo "selected"; ?>>Burundi</option>
							      <option value="31" <?php if ($_SESSION['pais_User']=="31") echo "selected"; ?>>Bután</option>
							      <option value="32" <?php if ($_SESSION['pais_User']=="32") echo "selected"; ?>>Cabo Verde</option>
							      <option value="33" <?php if ($_SESSION['pais_User']=="33") echo "selected"; ?>>Camboya</option>
							      <option value="34" <?php if ($_SESSION['pais_User']=="34") echo "selected"; ?>>Camerún</option>
							      <option value="35" <?php if ($_SESSION['pais_User']=="35") echo "selected"; ?>>Canadá</option>
							      <option value="36" <?php if ($_SESSION['pais_User']=="36") echo "selected"; ?>>Catar</option>
							      <option value="37" <?php if ($_SESSION['pais_User']=="37") echo "selected"; ?>>Chad</option>
							      <option value="38" <?php if ($_SESSION['pais_User']=="38") echo "selected"; ?>>Chile</option>
							      <option value="39" <?php if ($_SESSION['pais_User']=="39") echo "selected"; ?>>China</option>
							      <option value="40" <?php if ($_SESSION['pais_User']=="40") echo "selected"; ?>>Chipre</option>
							      <option value="41" <?php if ($_SESSION['pais_User']=="41") echo "selected"; ?>>Ciudad del Vaticano</option>
							      <option value="42" <?php if ($_SESSION['pais_User']=="42") echo "selected"; ?>>Colombia</option>
							      <option value="43" <?php if ($_SESSION['pais_User']=="43") echo "selected"; ?>>Comoras</option>
							      <option value="44" <?php if ($_SESSION['pais_User']=="44") echo "selected"; ?>>Corea del Norte</option>
							      <option value="45" <?php if ($_SESSION['pais_User']=="45") echo "selected"; ?>>Corea del Sur</option>
							      <option value="46" <?php if ($_SESSION['pais_User']=="46") echo "selected"; ?>>Costa de Marfil</option>
							      <option value="47" <?php if ($_SESSION['pais_User']=="47") echo "selected"; ?>>Costa Rica</option>
							      <option value="48" <?php if ($_SESSION['pais_User']=="48") echo "selected"; ?>>Croacia</option>
							      <option value="49" <?php if ($_SESSION['pais_User']=="49") echo "selected"; ?>>Cuba</option>
							      <option value="50"  <?php if ($_SESSION['pais_User']=="50") echo "selected"; ?>>Dinamarca</option>
							      <option value="51" <?php if ($_SESSION['pais_User']=="51") echo "selected"; ?>>Dominica</option>
							      <option value="52" <?php if ($_SESSION['pais_User']=="52") echo "selected"; ?>>Ecuador</option>
							      <option value="53" <?php if ($_SESSION['pais_User']=="53") echo "selected"; ?>>Egipto</option>
							      <option value="54" <?php if ($_SESSION['pais_User']=="54") echo "selected"; ?>>El Salvador</option>
							      <option value="55" <?php if ($_SESSION['pais_User']=="55") echo "selected"; ?>>Emiratos Árabes Unidos</option>
							      <option value="56" <?php if ($_SESSION['pais_User']=="56") echo "selected"; ?>>Eritrea</option>
							      <option value="57" <?php if ($_SESSION['pais_User']=="57") echo "selected"; ?>>Eslovaquia</option>
							      <option value="58" <?php if ($_SESSION['pais_User']=="58") echo "selected"; ?>>Eslovenia</option>
							      <option value="59" <?php if ($_SESSION['pais_User']=="59") echo "selected"; ?>>España</option>
							      <option value="60" <?php if ($_SESSION['pais_User']=="60") echo "selected"; ?>>Estados Unidos</option>
							      <option value="61" <?php if ($_SESSION['pais_User']=="61") echo "selected"; ?>>Estonia</option>
							      <option value="62" <?php if ($_SESSION['pais_User']=="62") echo "selected"; ?>>Etiopía</option>
							      <option value="63" <?php if ($_SESSION['pais_User']=="63") echo "selected"; ?>>Filipinas</option>
							      <option value="64" <?php if ($_SESSION['pais_User']=="64") echo "selected"; ?>>Finlandia</option>
							      <option value="65" <?php if ($_SESSION['pais_User']=="65") echo "selected"; ?>>Fiyi</option>
							      <option value="66" <?php if ($_SESSION['pais_User']=="66") echo "selected"; ?>>Francia</option>
							      <option value="67" <?php if ($_SESSION['pais_User']=="67") echo "selected"; ?>>Gabón</option>
							      <option value="68" <?php if ($_SESSION['pais_User']=="68") echo "selected"; ?>>Gambia</option>
							      <option value="69" <?php if ($_SESSION['pais_User']=="69") echo "selected"; ?>>Georgia</option>
							      <option value="70" <?php if ($_SESSION['pais_User']=="70") echo "selected"; ?>>Ghana</option>
							      <option value="71" <?php if ($_SESSION['pais_User']=="71") echo "selected"; ?>>Granada</option>
							      <option value="72" <?php if ($_SESSION['pais_User']=="72") echo "selected"; ?>>Grecia</option>
							      <option value="73" <?php if ($_SESSION['pais_User']=="73") echo "selected"; ?>>Guatemala</option>
							      <option value="74" <?php if ($_SESSION['pais_User']=="74") echo "selected"; ?>>Guyana</option>
							      <option value="75" <?php if ($_SESSION['pais_User']=="75") echo "selected"; ?>>Guinea</option>
							      <option value="76" <?php if ($_SESSION['pais_User']=="76") echo "selected"; ?>>Guinea ecuatorial</option>
							      <option value="77" <?php if ($_SESSION['pais_User']=="77") echo "selected"; ?>>Guinea-Bisáu</option>
							      <option value="78" <?php if ($_SESSION['pais_User']=="78") echo "selected"; ?>>Haití</option>
							      <option value="79" <?php if ($_SESSION['pais_User']=="79") echo "selected"; ?>>Honduras</option>
							      <option value="80" <?php if ($_SESSION['pais_User']=="80") echo "selected"; ?>>Hungría</option>
							      <option value="81" <?php if ($_SESSION['pais_User']=="81") echo "selected"; ?>>India</option>
							      <option value="82" <?php if ($_SESSION['pais_User']=="82") echo "selected"; ?>>Indonesia</option>
							      <option value="83" <?php if ($_SESSION['pais_User']=="83") echo "selected"; ?>>Irak</option>
							      <option value="84" <?php if ($_SESSION['pais_User']=="84") echo "selected"; ?>>Irán</option>
							      <option value="85" <?php if ($_SESSION['pais_User']=="85") echo "selected"; ?>>Irlanda</option>
							      <option value="86" <?php if ($_SESSION['pais_User']=="86") echo "selected"; ?>>Islandia</option>
							      <option value="87" <?php if ($_SESSION['pais_User']=="87") echo "selected"; ?>>Islas Marshall</option>
							      <option value="88" <?php if ($_SESSION['pais_User']=="88") echo "selected"; ?>>Islas Salomón</option>
							      <option value="89" <?php if ($_SESSION['pais_User']=="89") echo "selected"; ?>>Israel</option>
							      <option value="90" <?php if ($_SESSION['pais_User']=="90") echo "selected"; ?>>Italia</option>
							      <option value="91"<?php if ($_SESSION['pais_User']=="91") echo "selected"; ?>>Jamaica</option>
							      <option value="92"<?php if ($_SESSION['pais_User']=="92") echo "selected"; ?>>Japón</option>
							      <option value="93"<?php if ($_SESSION['pais_User']=="93") echo "selected"; ?>>Jordania</option>
							      <option value="94"<?php if ($_SESSION['pais_User']=="94") echo "selected"; ?>>Kazajistán</option>
							      <option value="95"<?php if ($_SESSION['pais_User']=="95") echo "selected"; ?>>Kenia</option>
							      <option value="96"<?php if ($_SESSION['pais_User']=="96") echo "selected"; ?>>Kirguistán</option>
							      <option value="97"<?php if ($_SESSION['pais_User']=="97") echo "selected"; ?>>Kiribati</option>
							      <option value="98"<?php if ($_SESSION['pais_User']=="98") echo "selected"; ?>>Kuwait</option>
							      <option value="99"<?php if ($_SESSION['pais_User']=="99") echo "selected"; ?>>Laos</option>
							      <option value="100"<?php if ($_SESSION['pais_User']=="100") echo "selected"; ?>>Lesoto</option>
							      <option value="101" <?php if ($_SESSION['pais_User']=="101") echo "selected"; ?>>Letonia</option>
							      <option value="102" <?php if ($_SESSION['pais_User']=="102") echo "selected"; ?>>Líbano</option>
							      <option value="103" <?php if ($_SESSION['pais_User']=="103") echo "selected"; ?>>Liberia</option>
							      <option value="104" <?php if ($_SESSION['pais_User']=="104") echo "selected"; ?>>Libia</option>
							      <option value="105" <?php if ($_SESSION['pais_User']=="105") echo "selected"; ?>>Liechtenstein</option>
							      <option value="106" <?php if ($_SESSION['pais_User']=="106") echo "selected"; ?>>Lituania</option>
							      <option value="107" <?php if ($_SESSION['pais_User']=="107") echo "selected"; ?>>Luxemburgo</option>
							      <option value="108" <?php if ($_SESSION['pais_User']=="108") echo "selected"; ?>>Madagascar</option>
							      <option value="109" <?php if ($_SESSION['pais_User']=="109") echo "selected"; ?>>Malasia</option>
							      <option value="110" <?php if ($_SESSION['pais_User']=="110") echo "selected"; ?>>Malaui</option>
							      <option value="111" <?php if ($_SESSION['pais_User']=="111") echo "selected"; ?>Maldivas</option>
							      <option value="112" <?php if ($_SESSION['pais_User']=="112") echo "selected"; ?>Malí</option>
							      <option value="113" <?php if ($_SESSION['pais_User']=="113") echo "selected"; ?>Malta</option>
							      <option value="114" <?php if ($_SESSION['pais_User']=="114") echo "selected"; ?>Marruecos</option>
							      <option value="115" <?php if ($_SESSION['pais_User']=="115") echo "selected"; ?>Mauricio</option>
							      <option value="116" <?php if ($_SESSION['pais_User']=="116") echo "selected"; ?>Mauritania</option>
							      <option value="117" <?php if ($_SESSION['pais_User']=="117") echo "selected"; ?>México</option>
							      <option value="118" <?php if ($_SESSION['pais_User']=="118") echo "selected"; ?>Micronesia</option>
							      <option value="119" <?php if ($_SESSION['pais_User']=="119") echo "selected"; ?>Moldavia</option>
							      <option value="120" <?php if ($_SESSION['pais_User']=="120") echo "selected"; ?>Mónaco</option>
							      <option value="121" <?php if ($_SESSION['pais_User']=="121") echo "selected"; ?>>Mongolia</option>
							      <option value="122" <?php if ($_SESSION['pais_User']=="122") echo "selected"; ?>>Montenegro</option>
							      <option value="123" <?php if ($_SESSION['pais_User']=="123") echo "selected"; ?>>Mozambique</option>
							      <option value="124" <?php if ($_SESSION['pais_User']=="124") echo "selected"; ?>>Namibia</option>
							      <option value="125" <?php if ($_SESSION['pais_User']=="125") echo "selected"; ?>>Nauru</option>
							      <option value="126" <?php if ($_SESSION['pais_User']=="126") echo "selected"; ?>>Nepal</option>
							      <option value="127" <?php if ($_SESSION['pais_User']=="127") echo "selected"; ?>>Nicaragua</option>
							      <option value="128" <?php if ($_SESSION['pais_User']=="128") echo "selected"; ?>>Níger</option>
							      <option value="129" <?php if ($_SESSION['pais_User']=="129") echo "selected"; ?>>Nigeria</option>
							      <option value="130" <?php if ($_SESSION['pais_User']=="130") echo "selected"; ?>>Noruega</option>
							      <option value="131" <?php if ($_SESSION['pais_User']=="131") echo "selected"; ?>>Nueva Zelanda</option>
							      <option value="132" <?php if ($_SESSION['pais_User']=="132") echo "selected"; ?>>Omán</option>
							      <option value="133" <?php if ($_SESSION['pais_User']=="133") echo "selected"; ?>>Países Bajos</option>
							      <option value="134" <?php if ($_SESSION['pais_User']=="134") echo "selected"; ?>>Pakistán</option>
							      <option value="135" <?php if ($_SESSION['pais_User']=="135") echo "selected"; ?>>Palaos</option>
							      <option value="136" <?php if ($_SESSION['pais_User']=="136") echo "selected"; ?>>Panamá</option>
							      <option value="137" <?php if ($_SESSION['pais_User']=="137") echo "selected"; ?>>Papúa Nueva Guinea</option>
							      <option value="138" <?php if ($_SESSION['pais_User']=="138") echo "selected"; ?>>Paraguay</option>
							      <option value="139" <?php if ($_SESSION['pais_User']=="139") echo "selected"; ?>>Perú</option>
							      <option value="140" <?php if ($_SESSION['pais_User']=="140") echo "selected"; ?>>Polonia</option>
							      <option value="141" <?php if ($_SESSION['pais_User']=="141") echo "selected"; ?>>Portugal</option>
							      <option value="142" <?php if ($_SESSION['pais_User']=="142") echo "selected"; ?>>Reino Unido</option>
							      <option value="143" <?php if ($_SESSION['pais_User']=="143") echo "selected"; ?>>República Centroafricana</option>
							      <option value="144" <?php if ($_SESSION['pais_User']=="144") echo "selected"; ?>>República Checa</option>
							      <option value="145" <?php if ($_SESSION['pais_User']=="145") echo "selected"; ?>>República de Macedonia</option>
							      <option value="146" <?php if ($_SESSION['pais_User']=="146") echo "selected"; ?>>República del Congo</option>
							      <option value="147" <?php if ($_SESSION['pais_User']=="147") echo "selected"; ?>>República Democrática del Congo</option>
							      <option value="148" <?php if ($_SESSION['pais_User']=="148") echo "selected"; ?>>República Dominicana</option>
							      <option value="149" <?php if ($_SESSION['pais_User']=="149") echo "selected"; ?>>República Sudafricana</option>
							      <option value="150" <?php if ($_SESSION['pais_User']=="150") echo "selected"; ?>>Ruanda</option>
							      <option value="151" <?php if ($_SESSION['pais_User']=="151") echo "selected"; ?>>Rumanía</option>
							      <option value="152" <?php if ($_SESSION['pais_User']=="152") echo "selected"; ?>>Rusia</option>
							      <option value="153" <?php if ($_SESSION['pais_User']=="153") echo "selected"; ?>>Samoa</option>
							      <option value="154" <?php if ($_SESSION['pais_User']=="154") echo "selected"; ?>>San Cristóbal y Nieves</option>
							      <option value="155" <?php if ($_SESSION['pais_User']=="155") echo "selected"; ?>>San Marino</option>
							      <option value="156" <?php if ($_SESSION['pais_User']=="156") echo "selected"; ?>>San Vicente y las Granadinas</option>
							      <option value="157" <?php if ($_SESSION['pais_User']=="157") echo "selected"; ?>>Santa Lucía</option>
							      <option value="158" <?php if ($_SESSION['pais_User']=="158") echo "selected"; ?>>Santo Tomé y Príncipe</option>
							      <option value="159" <?php if ($_SESSION['pais_User']=="159") echo "selected"; ?>>Senegal</option>
							      <option value="160" <?php if ($_SESSION['pais_User']=="160") echo "selected"; ?>>Serbia</option>
							      <option value="161" <?php if ($_SESSION['pais_User']=="161") echo "selected"; ?>>Seychelles</option>
							      <option value="162" <?php if ($_SESSION['pais_User']=="162") echo "selected"; ?>>Sierra Leona</option>
							      <option value="163" <?php if ($_SESSION['pais_User']=="163") echo "selected"; ?>>Singapur</option>
							      <option value="164" <?php if ($_SESSION['pais_User']=="164") echo "selected"; ?>>Siria</option>
							      <option value="165" <?php if ($_SESSION['pais_User']=="165") echo "selected"; ?>>Somalia</option>
							      <option value="166" <?php if ($_SESSION['pais_User']=="166") echo "selected"; ?>>Sri Lanka</option>
							      <option value="167" <?php if ($_SESSION['pais_User']=="167") echo "selected"; ?>>Suazilandia</option>
							      <option value="168" <?php if ($_SESSION['pais_User']=="168") echo "selected"; ?>>Sudán</option>
							      <option value="169" <?php if ($_SESSION['pais_User']=="169") echo "selected"; ?>>Sudán del Sur</option>
							      <option value="170" <?php if ($_SESSION['pais_User']=="170") echo "selected"; ?>>Suecia</option>
							      <option value="171" <?php if ($_SESSION['pais_User']=="171") echo "selected"; ?>>Suiza</option>
							      <option value="172" <?php if ($_SESSION['pais_User']=="172") echo "selected"; ?>>Surinam</option>
							      <option value="173" <?php if ($_SESSION['pais_User']=="173") echo "selected"; ?>>Tailandia</option>
							      <option value="174" <?php if ($_SESSION['pais_User']=="174") echo "selected"; ?>>Tanzania</option>
							      <option value="175" <?php if ($_SESSION['pais_User']=="175") echo "selected"; ?>>Tayikistán</option>
							      <option value="176" <?php if ($_SESSION['pais_User']=="176") echo "selected"; ?>>Timor Oriental</option>
							      <option value="177" <?php if ($_SESSION['pais_User']=="177") echo "selected"; ?>>Togo</option>
							      <option value="178" <?php if ($_SESSION['pais_User']=="178") echo "selected"; ?>>Tonga</option>
							      <option value="179" <?php if ($_SESSION['pais_User']=="179") echo "selected"; ?>>Trinidad y Tobago</option>
							      <option value="180" <?php if ($_SESSION['pais_User']=="180") echo "selected"; ?>>Túnez</option>
							      <option value="181" <?php if ($_SESSION['pais_User']=="181") echo "selected"; ?>>Turkmenistán</option>
							      <option value="182" <?php if ($_SESSION['pais_User']=="182") echo "selected"; ?>>Turquía</option>
							      <option value="183" <?php if ($_SESSION['pais_User']=="183") echo "selected"; ?>>Tuvalu</option>
							      <option value="184" <?php if ($_SESSION['pais_User']=="184") echo "selected"; ?>>Ucrania</option>
							      <option value="185" <?php if ($_SESSION['pais_User']=="185") echo "selected"; ?>>Uganda</option>
							      <option value="186" <?php if ($_SESSION['pais_User']=="186") echo "selected"; ?>>Uruguay</option>
							      <option value="187" <?php if ($_SESSION['pais_User']=="187") echo "selected"; ?>>Uzbekistán</option>
							      <option value="188" <?php if ($_SESSION['pais_User']=="188") echo "selected"; ?>>Vanuatu</option>
							      <option value="189" <?php if ($_SESSION['pais_User']=="189") echo "selected"; ?>>Venezuela</option>
							      <option value="190" <?php if ($_SESSION['pais_User']=="190") echo "selected"; ?>>Vietnam</option>
							      <option value="191" <?php if ($_SESSION['pais_User']=="191") echo "selected"; ?>>Yemen</option>
							      <option value="192" <?php if ($_SESSION['pais_User']=="192") echo "selected"; ?>>Yibuti</option>
							      <option value="193" <?php if ($_SESSION['pais_User']=="193") echo "selected"; ?>>Zambia</option>
							      <option value="194" <?php if ($_SESSION['pais_User']=="194") echo "selected"; ?>>Zimbabue</option>
							    </select>
							  </div>

							</div>

							<!-- Multiple Radios (inline) -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="radios">Genero</label>
							  <div class="col-md-4">
							    <label class="radio-inline" for="radios-0">
							      <input type="radio" name="genero" id="radios-0" value="1" <?php if ($_SESSION['genero_User']=="1") echo "checked"; ?>>
							      Femenino
							    </label>
							    <label class="radio-inline" for="radios-1">
							      <input type="radio" name="genero" id="radios-1" value="2" <?php if ($_SESSION['genero_User']=="2") echo "checked"; ?>>
							      Masculino
							    </label>
							  </div>
							</div>

							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textarea">Descripcion</label>
							  <div class="col-md-4">
							    <textarea class="form-control" id="textarea" name="descripcion"><?php echo $_SESSION['descripcion_User']; ?></textarea>
							  </div>
							</div>

							<!-- Prepended text-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="prependedtext">Redes Sociales</label>
							  <div class="col-md-4">
							    <div class="input-group">
							      <span class="input-group-addon">www.facebook.com/</span>
							      <input id="prependedtext" name="facebook" class="form-control" placeholder="Facebook" type="text" value="<?php echo $_SESSION['facebook_User']; ?>">
							    </div>

							  </div>
							</div>

							<!-- Prepended text-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="prependedtext"></label>
							  <div class="col-md-4">
							    <div class="input-group">
							      <span class="input-group-addon">www.twitter.com/</span>
							      <input id="prependedtext" name="twitter" class="form-control" placeholder="Twitter" type="text" value="<?php echo $_SESSION['twitter_User']; ?>">
							    </div>

							  </div>
							</div>

							<!-- Prepended text-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="prependedtext"></label>
							  <div class="col-md-4">
							    <div class="input-group">
							      <span class="input-group-addon">www.instagram.com/</span>
							      <input id="prependedtext" name="instagram" class="form-control" placeholder="Instagram" type="text" value="<?php echo $_SESSION['instagram_User']; ?>">
							    </div>

							  </div>
							</div>

							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="singlebutton"></label>
							  <div class="col-md-4">
							    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar los cambios</button>
							  </div>
							</div>
						</fieldset>
					</form>
				</div>
			</div><!--rowBody-->
		</div><!--FinEditar-->
		<div class="footer"><?php include 'footer.php';?></div>
</body>
</html>
