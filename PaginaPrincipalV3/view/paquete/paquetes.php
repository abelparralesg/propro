<!--Si necesita loguear, sino borrenlo -->
<?php
session_start();
if (!isset($SESSION["usuario"])) {
	header("Location:login.php");
}
?>

<br><br><br>
	<h1 class="mensa1"> Paquetes de TV que no te puedes perder solo en TV WAR!</h1>
	<div class="wrap">
		<div class="miswitch">
			<div class="swicht-btn" id="swicht-btn"></div>
			<a>Precio Mensual </a>
			<a>Precio Anual</a>
		</div>

		<div class="pricing-wrap">

			<div class="pricing-table">
				<div class="pricing-table-cont">
					<div class="pricing-table-month">
						<div class="pricing-table-head">
							<h2>BASICO</h2>
							<h3><sup>$ </sup>25<sub>/MES</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Disfruta de 60 canales con deportes</li>
							<li>películas, programas infantiles y series</li>
							<li>Incluye todos tus canales locales.</li>
							<li><span>1 </span>Dominio</li>
							<li><span>Ilimitado </span>Ancho de Banda</li>
							<li>El nuevo canal deportivo afizzionados</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
					<div class="pricing-table-year">
						<div class="pricing-table-head">
							<h2>BASICO</h2>
							<h3><sup>$ </sup>300<sub>/AÑO</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Disfruta de 60 canales con deportes</li>
							<li>películas, programas infantiles y series</li>
							<li>Incluye todos tus canales locales.</li>
							<li><span>1 </span>Dominio</li>
							<li><span>Ilimitado </span>Ancho de Banda</li>
							<li>El nuevo canal deportivo afizzionados</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
				</div>
			</div>
			
			<div class="pricing-table">
				<div class="pricing-table-cont">
					<div class="pricing-table-month">
						<div class="pricing-table-head estandar-title">
							<h2>PREMIUM</h2>
							<h3><sup>$ </sup>50<sub>/MES</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Porque es mejor en TV War, contrátalo</li>
							<li>La mejor selección de contenido exclusivo</li>
							<li>La mejor selección deproducciones originales</li>
							<li>Miralos a través de tus dispositivos.</li>
							<li>Disfruta todos los partidos del Campeonato Nacional </li>
							<li>Audio y subtítulos en tu idioma</li>
						</ul>
						<a href="#" class="pricing-table-button estandar">Seleccionar plan</a>
					</div>
					<div class="pricing-table-year">
						<div class="pricing-table-head estandar-title">
							<h2>PREMIUM</h2>
							<h3><sup>$ </sup>600<sub>/AÑO</sub></h3>
						</div>
						<ul class="pricing-table-list">
                            <li>Porque es mejor en TV War, contrátalo</li>
							<li>La mejor selección de contenido exclusivo</li>
							<li>La mejor selección deproducciones originales</li>
							<li>Miralos a través de tus dispositivos.</li>
							<li>Disfruta todos los partidos del Campeonato Nacional </li>
							<li>Audio y subtítulos en tu idioma</li>
						</ul>
						<a href="#" class="pricing-table-button estandar">Seleccionar plan</a>
					</div>
				</div>
			</div>

			<div class="pricing-table">
				<div class="pricing-table-cont">
					<div class="pricing-table-month">
						<div class="pricing-table-head">
							<h2>FAMILYHD</h2>
							<h3><sup>$ </sup>60<sub>/MES</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 96 canales</li>
							<li>Búsqueda de programación</li>
							<li>Guía de programación en pantalla</li>
							<li>Incluye Campeonato Ecuatoriano de Fútbol</li>
							<li>Control parental</li>
							<li>Libre de cuentas</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
					<div class="pricing-table-year">
						<div class="pricing-table-head">
							<h2>FAMILY_HD</h2>
							<h3><sup>$ </sup>720<sub>/AÑO</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 96 canales</li>
							<li>Búsqueda de programación</li>
							<li>Guía de programación en pantalla</li>
							<li>Incluye Campeonato Ecuatoriano de Fútbol</li>
							<li>Control parental</li>
							<li>Libre de cuentas</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrap">
		<div class="pricing-wrap">

			<div class="pricing-table">
				<div class="pricing-table-cont">
					<div class="pricing-table-month">
						<div class="pricing-table-head">
							<h2>BRONCE_PACKAGEHD</h2>
							<h3><sup>$ </sup>65<sub>/MES</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 107 canales</li>
							<li>60 Canales Internacionales</li>
							<li>11 Canales Nacionales</li>
							<li>Guía de programación en pantalla</li>
							<li>Libre de cuentas</li>
							<li>Canales Premium</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
					<div class="pricing-table-year">
						<div class="pricing-table-head">
							<h2>BRONCE_PACKAGEHD</h2>
							<h3><sup>$ </sup>780<sub>/AÑO</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 107 canales</li>
							<li>60 Canales Internacionales</li>
							<li>11 Canales Nacionales</li>
							<li>Guía de programación en pantalla</li>
							<li>Libre de cuentas</li>
							<li>Canales Premium</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
				</div>
			</div>
			
			<div class="pricing-table">
				<div class="pricing-table-cont">
					<div class="pricing-table-month">
						<div class="pricing-table-head estandar-title">
							<h2>PLATA_PACKAGEHD</h2>
							<h3><sup>$ </sup>70<sub>/MES</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 150 canales</li>
							<li>43 Canales HD</li>
							<li>60 Canales Internacionales</li>
							<li>Audio y subtítulos en tu idioma</li>
							<li>Libre de cuentas</li>
							<li>Acceso a TV War Play</li>
						</ul>
						<a href="#" class="pricing-table-button estandar">Seleccionar plan</a>
					</div>
					<div class="pricing-table-year">
						<div class="pricing-table-head estandar-title">
							<h2>PLATA_PACKAGEHD</h2>
							<h3><sup>$ </sup>840<sub>/AÑO</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 150 canales</li>
							<li>43 Canales HD</li>
							<li>60 Canales Internacionales</li>
							<li>Audio y subtítulos en tu idioma</li>
							<li>Libre de cuentas</li>
							<li>Acceso a TV War Play</li>
						</ul>
						<a href="#" class="pricing-table-button estandar">Seleccionar plan</a>
					</div>
				</div>
			</div>

			<div class="pricing-table">
				<div class="pricing-table-cont">
					<div class="pricing-table-month">
						<div class="pricing-table-head">
							<h2>PLATINO_PACKAGEHD</h2>
							<h3><sup>$ </sup>90<sub>/MES</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 128 canales</li>
							<li>Libre de cuentas</li>
							<li>Incluye Campeonato Ecuatoriano de Fútbol</li>
							<li>Búsqueda de programación</li>
							<li>Notificado mediante DLR.- 682</li>
							<li>Canales Premium</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
					<div class="pricing-table-year">
						<div class="pricing-table-head">
							<h2>PLATINO_PACKAGEHD</h2>
							<h3><sup>$ </sup>950<sub>/AÑO</sub></h3>
						</div>
						<ul class="pricing-table-list">
							<li>Acceso a 128 canales</li>
							<li>Libre de cuentas</li>
							<li>Incluye Campeonato Ecuatoriano de Fútbol</li>
							<li>Búsqueda de programación</li>
							<li>Notificado mediante DLR.- 682</li>
							<li>Canales Premium</li>
						</ul>
						<a href="#" class="pricing-table-button">Seleccionar plan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>