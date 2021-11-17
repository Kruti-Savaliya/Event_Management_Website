<div class="div-threeButton">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">

			<?php echo form_open('Signup/SignupBusiness'); ?>
				<h2 style="border-bottom: 1px solid #ddd">   Registro Negocio o Foundacion</h2>
				<div style="display: inline-block; width: 45%;padding-right: 5%">
					<label for="username">
						Correo
					</label>
					<br>
					<?php echo form_input(['name'=>'username', 'placeholder'=>'Correo', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color:red">
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
					<span style="color:red">
						<?php echo form_error('username'); ?>
					</span>
					<!--<input type="password" name="Contraseña" placeholder="Contraseña" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>


				<div style="display: inline-block; width: 45%;padding-right: 5%; padding-top: 5%">
					<label for="name">
						Nombre
					</label>
					<br>
					<?php echo form_input(['name'=>'name', 'placeholder'=>'Nombre', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<span style="color:red">
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
					<span style="color:red">
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
					<span style="color:red">
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
					<span style="color:red">
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
					<span style="color:red">
						<?php echo form_error('códigopostal'); ?>
					</span>
					<!--<input type="textbox" name="códigopostal" placeholder="" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="width: 100%; text-align: center; padding-bottom: 2%; padding-top: 5%">
					<?php 
					 $data_radio1 = array(
	                        'name' => 'optradio',
	                        'value' => '1',
	                        'checked' => TRUE,
	                    );
					 $data_radio2 = array(
	                        'name' => 'optradio',
	                        'value' => '2',

	                    );
					 $data_radio3 = array(
	                        'name' => 'optradio',
	                        'value' => '3',
	                    );

					 echo form_label('Tipo de negocio 1');
					 echo form_radio($data_radio1);
					 echo form_label('Tipo de negocio 2');
					 echo form_radio($data_radio2);
					 echo form_label('Tipo de negocio 3');
					 echo form_radio($data_radio3);
	                    ?>
				</div>

				<div style="width: 100%; text-align: left; padding-bottom: 2%; border-bottom: 1px solid #ddd">
					<br>
					<input class="threeButton" type="submit" name="submit" value="Registrarse" onclick="return signup()">
				</div>

				<div style="width: 100%; text-align: right;">
					<br>
					<input class="threeButton4" type="submit" name="cancel" value="Cerrar">
				</div>
		</div>