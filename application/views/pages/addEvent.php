<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">
<div style="display: inline; width: 100%; margin-left: 20%;margin-right: 5%">
			<div style="margin-left: 5%; margin-right: 5%;background-color: #ddd ; padding-left: 2%">
			<p style="margin-top: 10%; padding-top: 3%"></p>
			<?php echo form_open('AddEvent/submitted');	 ?>
				<h2 style="border-bottom: 1px solid #ddd">Registro de Evento</h2>
				<div style="display: inline-block; width: 45%;padding-right: 5%">
					<label for="nombre">
						Nombres
					</label>
					<br>
					<?php echo form_input(['name'=>'nombre', 'placeholder'=>'Nombre del Evento', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="nombre" placeholder="Nombre del Evento" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; float: right;width: 20%; padding-right: 15%; ">
					<img src="<?php echo base_url();?>images\imagenes\imagensubir.png" style="width: 100%">
					<input class="threeButton" type="submit" name="submit" style="margin-left: 10%; margin-right: 10%; width: 100%" value="Seleccionar Imagen">
				</div>
				<br>
				<br>
				<div style="display: inline-block; width: 45%;padding-right: 5%; padding-top: 5%">
					<label for="responsable">
						Responsable
					</label>
					<br>
					<?php echo form_input(['name'=>'responsable', 'placeholder'=>'Nombre del Responsable', 'style'=>'width: 100%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="responsable" placeholder="Nombre del Responsable" style="width: 100%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div style="display: inline-block; width: 47%">
				</div>
				<div style="margin-top: 2%; padding-bottom: 5%">
					<label for="lugar">
						Lugar
					</label>
					<br>
					<?php echo form_input(['name'=>'lugar', 'placeholder'=>'Direccion del lugar del eventos', 'style'=>'width: 97%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="lugar" placeholder="Direccion del lugar del eventos" style="width: 97%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
				</div>
				<div class="left2"><label for="fetcha">
						Fecha
					</label>
					<br>
					<?php echo form_input(['name'=>'fetcha', 'placeholder'=>'MM/DD/YYYY', 'style'=>'width: 90%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="fetcha" placeholder="MM/DD/YYYY" style="width: 90%; border: none; height: 30px; border: 0.5px solid #ddd;" required="">-->
				</div>
				<div class="left2"><label for="hora">
						Hora
					</label>
					<br>
					<?php echo form_input(['name'=>'hora', 'placeholder'=>'HH:MM', 'style'=>'width: 90%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="hora" placeholder="HH:MM" style="width: 90%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
					</div>
				<div class="left2">
					<label for="contrasena">
						Valor de Boleto
					</label>
					<br>
					<?php echo form_input(['name'=>'contrasena', 'placeholder'=>'$000.00', 'style'=>'width: 90%; border: none; height: 30px; border: 0.5px solid #ddd']);?>
					<!--<input type="textbox" name="contrasena" placeholder="$000.00" style="width: 90%; border: none; height: 30px; border: 0.5px solid #ddd" required="">-->
					</div>	
				<br>
				<br>
				<div style="width: 100%; padding-left: 40%;padding-right: 40%; padding-bottom: 5%; float: center;">
					<br>
					<?php echo form_submit(['name'=>'submit','class'=>'threeButton' ,'value'=>'Guardar Cambios']);?>					
				</div>

				
				
		</div>
		</div>