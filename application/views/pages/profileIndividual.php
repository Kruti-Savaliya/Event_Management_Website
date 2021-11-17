<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">			

<div class="div-image1">
			<img src="<?php echo base_url();?>images\imagenes\bannercontacto.jpg" style="float: center; width:100%;height:400px;position: relative;">
			<ul><li><h2 id="txt1">PERFIL</h2></li></ul>
                <ul>
                    <li><a href="index.php" class="active" id="img2">INCIO</a></li>
                    <li><a href="profileAgent.php" id="img3">PERFIL</a></li>
                </ul>
		</div>

		<?php  echo $this->session->item;
               foreach($this->a->fetchtable_individual() as $row)  
                {  
                    //name has to be same as in the database.  
                	if($row->I_Mail == $this->session->item){
             ?>   
		<div style="padding-top: 10%;width: 100% margin-left:25%; margin-right: 25%">
			<h3 style="padding-left: 10%">Tu Información del Perfil</h3>
		</div>
		<div style="display: inline; width: 100%">
			<div style="width: 20%; margin-left: 9%; float: left; display: inline-block;">
				
				<h6 style="text-align: left"><i class="fas fa-book"></i><?php echo " ".$row->First_Name;?></h6>
				<h6 style="text-align: left"><i class="fas fa-book"></i><?php echo " ".$row->Last_Name;?></h6>
				<h6 style="text-align: left"><i class="fas fa-user"></i><?php echo " ".$row->First_Name;?></h6>
			</div>
			<div style="width: 20%; margin-left: 9%; float: left; display: inline-block;">
				<h6 style="text-align: left"><i class="fas fa-map-marker-alt"></i><?php echo " ".$row->Address;?></h6>
				<h6 style="text-align: left"><i class="fas fa-phone"></i><?php echo " ".$row->Telephone;?></h6>
				<h6 style="text-align: left"><i class="far fa-paper-plane"></i><?php echo " ".$row->I_Mail;?></h6>
			</div>
			<div style="display: inline-block; float: right;width: 20%; padding-right: 15%; padding-bottom: 3% ">
					<img src="<?php echo base_url();?>images\imagenes\user.png">
				</div>
		</div>
		<div style="display: inline; width: 100%; margin-left: 20%;margin-right: 5%">
			<div style="margin-left: 5%; margin-right: 5%;background-color: #ddd ; padding-left: 2%">
				<p style="margin-top: 10%"></p>
					<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">

			<?php echo form_open('Profile/profile_Individual'); ?>
				<h2 style="border-bottom: 1px solid #ddd">Estar en contacto</h2>
				<div style="display: inline-block; width: 45%;padding-right: 5%">
					<label for="username">
						Nombres y Apellido
					</label>
					<br>
					<?php echo form_input(['name'=>'username', 'placeholder'=>'tu Nombre y Apellido', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="username" placeholder="tu Nombre y Apellido" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; float: right;width: 20%; padding-right: 5%">
					<img src="<?php echo base_url();?>images\imagenes\user.png">
				</div>


				<div style="display: inline-block; width: 45%;padding-right: 5%; padding-top: 5%">
					<label for="name">
						Nombre da le Foundacion
					</label>
					<br>
					<?php echo form_input(['name'=>'name', 'placeholder'=>'Nombre da le Foundacion', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="name" placeholder="Nombre da le Foundacion" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; width: 47%">
				</div>
				<div style="margin-top: 2%; padding-bottom: 5%">
					<label for="Correo">
						Correo
					</label>
					<br>
					<?php echo form_input(['name'=>'correo', 'placeholder'=>'Tu correo electrónico', 'style'=>'width: 97%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="correo" placeholder="Tu correo electrónico" style="width: 97%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div class="left2"><label for="telefono">
						Telefono
					</label>
					<br>
					<?php echo form_input(['name'=>'telefono', 'placeholder'=>'Telefono', 'style'=>'width: 90%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="telefono" placeholder="Telefono" style="width: 90%; border: none; height: 30px; border: 0.5px solid #ddd;" required="">--></div>
				<div class="left2"><label for="Usuario">
						Usuario
					</label>
					<br>
					<?php echo form_input(['name'=>'usuario', 'placeholder'=>'Nombre de Usuario', 'style'=>'width: 90%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="usuario" placeholder="Nombre de Usuario" style="width: 90%; border: none; height: 30px; border: 0.5px solid #ddd" required="">--></div>
				<div class="left2">
					<label for="Contraseña">
						Contraseña
					</label>
					<br>
					<?php echo form_password(['name'=>'contrasena', 'placeholder'=>'Contraseña', 'style'=>'width: 90%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="Password" name="contrasena" placeholder="Contraseña" style="width: 90%; border: none; height: 30px; border: 0.5px solid #ddd" required="">--> 	</div>	
				<br>
				<br>
				<div style="margin-top: 3%;width: 100%; text-align: left; border-bottom: 1px solid #ddd">
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton' ,'value'=>'Nota:']);?>					
					<h6>Solo puede cambiar los datos(Telefono, Contraseña y Logo)</h6>
				</div>
				<div style="width: 100%; padding-left: 40%;padding-right: 40%; padding-bottom: 5%; float: center">
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton' ,'value'=>'Guardar Cambios']);?>					
				</div>

				
				
			</form>
		</div>
		</div>