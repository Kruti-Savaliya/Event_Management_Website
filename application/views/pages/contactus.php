		<div>
			<div class="div-image1">
				<img src="<?php echo base_url();?>images\imagenes\bannercontacto.jpg" class="img-img1">
				<ul><li><h2 id="txt1">CONTACTO</h2></li></ul>
				<ul>
					<li><a href="#" class="active" id="img2">INCIO</a></li>
					<li><a href="#" id="img3">COTACTO</a></li>
				</ul>
			</div>
		</div>
		<div style="width: 100%; margin-right: 5%; margin-left: 5%; padding-top: 10%">
			<h3>Informacion del contacto</h3>
			<div>
            	<h4 style="width:25%;font-weight: lighter;float:left"><i class="fa fa-map-marker" style="font-size:15px"></i> 198 West 21st Street,<br>
             Suite 721 New York NY 10016</h4>

             	<h4 style="width:25%;font-weight: lighter;float:right"><i class="fa fa-globe"></i> diazapps.com </h4>

             	<h4 style="width:25%;font-weight: lighter;float:right"><i class="fa fa-paper-plane" style="font-size:15px"></i>  info@diazapps.com</h4>

             	<h4 style="width:25%;font-weight: lighter;float:right"><i class="fa fa-phone" style="font-size:15px"></i>  + 1235 2355 98</h4>

         </div>
		</div>

		<div style="width: 100%; margin-right: 5%; margin-left: 5%; padding-top: 10%">
			<h3>LEAN en las redas sociales</h3>
			<div style="width: 100%;">
				<div>
					<img src="<?php echo base_url();?>images\imagenes\facebook.png" style="width:50px;height: 50px;font-weight: lighter;float:left;margin-left: 10%; padding-right: 5%">
				</div>
            	<div>
					<img src="<?php echo base_url();?>images\imagenes\twitter.png" style="width:50px;height: 50px;font-weight: lighter;float:left;  margin-left: 10%; margin-right: 12%">
				</div>
				<div>
					<img src="<?php echo base_url();?>images\imagenes\instagram.png" style="width:50px;height: 50px;font-weight: lighter;float:left;margin-left: 10%; margin-right: 5%">
				</div>
				<div>
					<img src="<?php echo base_url();?>images\imagenes\correo.png" style="width:50px;height: 50px;font-weight: lighter;float:left;margin-left: 12%">
				</div>
         </div>


		<div style="width: 100%;margin-bottom: 20%">
			<div>
            	<h4 class="div-h4">LEAN Ayuda Humanitari</h4>

             	<h4 class="div-h4">@LeanEmergente</h4>

             	<h4 class="div-h4">@LeanAyudaHumanitaria</h4>

             	<h4 class="div-h4">lean.emergente@gmail.com</h4>
         </div>
		</div>
		</div>
		<div class="div-threeButton1">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">
			<?php echo form_open('Contactus/data_submitted'); ?>
				<h2 style="padding-top: 2%">Estar en contacot</h2>
				<div style="display: inline-block; width: 45%;padding-right: 5%">
					<label for="username">
						Nombre
					</label>
					<br>
					<?php echo form_input(['name'=>'username', 'placeholder'=>'Tu Nombre', 'style'=>'width: 100%; border: none; height: 30px']);?>
					<?php form_error('username'); ?>
				</div>
				<div style="display: inline-block; width: 47%">
					<label for="Apellido">
						Apellido
					</label>
					<br>
					<?php echo form_input(['name'=>'apellido', 'placeholder'=>'Tu Apellido', 'style'=>'width: 100%; border: none; height: 30px']);?>
				</div>
				<div style="margin-top: 2%">
					<label for="Correo">
						Correo
					</label>
					<br>
					<?php echo form_input(['name'=>'correo', 'placeholder'=>'Tu correo electronico', 'style'=>'width: 97%; border: none; height: 30px;']);?>					
				</div>
				<div style="margin-top: 2%">
					<label for="Tema">
						Tema
					</label>
					<br>
					<?php echo form_input(['name'=>'tema', 'placeholder'=>'Su asunto de esta mensaje', 'style'=>'width: 97%; border: none; height: 30px']);?>

				</div>
				<div style="margin-top: 2%">
					<label for="Correo">
						Correo
					</label>
					<br>
					<?php echo form_input(['name'=>'message', 'placeholder'=>'Tu correo electronico', 'style'=>'width: 97%; border: none; height: 150px; vertical-align: top']);?>					
				</div>
				<div style="width: 100%; text-align: center;">
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton' ,'value'=>'Eviar Mensaje']);?>
				</div>

		</div>
