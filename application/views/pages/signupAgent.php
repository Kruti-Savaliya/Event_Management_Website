<div class="div-threeButton">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">
			<?php echo form_open('Signup/SignupAgent'); ?>
				<h2 style="border-bottom: 1px solid #ddd">Registro de Agente LEAN</h2>
				<div style="display: inline-block; width: 45%;padding-right: 5%">
					<label for="username">
						Correo
					</label>
					<br>
					<?php echo form_input(['name'=>'username', 'placeholder'=>'Correo', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('username'); ?>
				</span>
					<!--<input type="textbox" name="username" placeholder="Correo" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; width: 47%">
					<label for="Contraseña">
						Contraseña
					</label>
					<br>
					<?php echo form_password(['name'=>'Contraseña', 'placeholder'=>'Contraseña', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('Contraseña'); ?>
				</span>
					<!--<input type="password" name="Contraseña" placeholder="Contraseña" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>

				<div style="display: inline-block; width: 45%;padding-right: 5%; padding-top: 5%">
					<label for="name">
						Nombre
					</label>
					<br>
					<?php echo form_input(['name'=>'name', 'placeholder'=>'Nombre', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('name'); ?>
				</span>
					<!--<input type="textbox" name="name" placeholder="Nombre" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; width: 47%">
					<label for="Apellido">
						Apellido
					</label>
					<br>
					<?php echo form_input(['name'=>'Apellido', 'placeholder'=>'Apellido', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('Apellido'); ?>
				</span>
					<!--<input type="textbox" name="Apellido" placeholder="Apellido" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="margin-top: 2%">
					<label for="Dirección">
						Dirección
					</label>
					<br>
					<?php echo form_input(['name'=>'Dirección', 'placeholder'=>'Dirección', 'style'=>'width: 97%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('Dirección'); ?>
				</span>
					<!--<input type="textbox" name="Dirección" placeholder="Dirección" style="width: 97%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="margin-top: 2%">
					<label for="Ciudad">
						Ciudad
					</label>
					<br>
					<?php echo form_input(['name'=>'Ciudad', 'placeholder'=>'Ciudad', 'style'=>'width: 97%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('Ciudad'); ?>
				</span>
					<!--<input type="textbox" name="Ciudad" placeholder="Ciudad" style="width: 97%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; width: 60%;padding-right: 5%; margin-top: 2%">
					<label for="estado">
						Estado
					</label>
					<br>
					<?php
					$data_dropdown = array(
                        'Volvo' => 'Volvo',
                        'Saab' => 'Saab',
                        'Mercedes'=>'Mercedes'
                    );
                    echo form_dropdown('select', $data_dropdown, 'Volvo', 'style="width: 97%; border: none; height: 30px; border: 0.5px solid #ddd"');
					?>
				</div>
				<div style="display: inline-block; width: 30%; margin-top: 2%">
					<label for="códigopostal">
						código postal
					</label>
					<br>
					<?php echo form_input(['name'=>'códigopostal', 'placeholder'=>'códigopostal', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color: red">
					<?php echo form_error('códigopostal'); ?>
				</span>

				</div>
				<div style="width: 100%; text-align: left; padding-bottom: 2%; border-bottom: 1px solid #ddd">
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton' ,'value'=>'Registrarse']);?>
				</div>

				<div style="width: 100%; text-align: right;">
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton4' ,'value'=>'Cerrar']);?>
				</div>
				
		</div>