	<div class="div-image1">
		<img src="<?php echo base_url();?>images\imagenes\bannerlogin.jpg" class="img-img1">
		<ul><li><h2 id="txt1">INCIAR SESIÓN</h2></li></ul>
		<ul>
			<li><a href="#" class="active" id="img2">INCIO</a></li>
			<li><a href="#" id="img3">INCIAR SESIÓN</a></li>
		</ul>
	</div>
</div>
<div class="div-threeButton">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">
			<?php echo form_open('Login/login_person'); ?>
				<h2 style="padding-top: 2%">Inciar Sesión</h2>
				<div style="display: inline-block; width: 40%;padding-right: 5%">
					<label for="username">
						Nombre de usuario
					</label>
					<br>
					<?php echo form_input(['name'=>'username', 'placeholder'=>'Nombre de usuario o correo', 'style'=>'width: 100%; border: none; height: 30px']);?>
					<h6 style="color:red"><?php echo form_error('username'); ?></h6>
					<!--<input type="textbox" name="username" placeholder="Nombre de usuario o correo" style="width: 100%; border: none; height: 30px" required="">-->
				</div>
				<div style="display: inline-block; width: 40%">
					<label for="password">
						Contraseña
					</label>
					<br>
					<?php echo form_password(['name'=>'password', 'placeholder'=>'Contraseña', 'style'=>'width: 100%; border: none; height: 30px']);?>
					<h6 style="color:red"><?php echo form_error('password'); ?></h6>

					<!--<input type="password" name="password" placeholder="Contraseña" style="width: 100%; border: none; height: 30px" required="">-->
				</div>
				<div style="width: 100%;padding-top: 5%; text-align: center;">
					<a href="popup1.php" style="color: #FFC300; text-decoration: none">Olvido su contrasena?</a>
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton' ,'value'=>'Entra']);?>
				</div>

		</div>