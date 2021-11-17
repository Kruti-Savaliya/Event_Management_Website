<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/leanevent.css">
<h2 style="font-weight: normal;text-align: center; padding-bottom: 5%; padding-top: 10%;">Lista de Eventos</h2>
		<div style="float:right; margin-bottom: 5%; margin-right: 15%">
			<button class="threeButton2" id="thisButton" onclick="document.location.href='<?php echo base_url(); ?>/addEvent'">
				Agregar
			</button>
		</div>
		<table style="border-spacing: 0; text-align: center; width: 100%; margin-bottom: 10%"" >
			<tr style=" background-color: #f2f2f2">
				<td style="width: 50%; padding-top: 1%; padding-bottom: 1%;">
					DETALLES DEL EVENTOS
				</td>
				<td style="width: 10%">
					LUGAR
				</td>
				<td style="width: 11%">
					FECHA
				</td>
				<td style="width: 14%">
					MODIFICAR
				</td>
				<td>
					ELIMINAR
				</td>
			</tr>
			<?php

			 	
				$query = $this->db->get('table_events');

				foreach ($query->result() as $row)
				{
				       			
			?>

			<tr>
				<td>
					<div style="width: 30%;">
							<img src="<?php base_url(); ?>images\imagenes\minibaner3.jpg" style=" float: left; height: 10vw; width: 80%; padding-left: 5%; padding-top: 5%; padding-bottom: 5%">
					</div>
					<div>
						<h4 style=" padding-top: 10%; margin-bottom: 10%">
							<?php echo $row->Details; ?>
						</h4>
					</div>
				</td>
				<td>
					<h5>
							<?php echo $row->Place; ?>
					</h5>
				</td>
				<td>
					<h5>
						<?php echo $row->Date; ?>
					</h5>
				</td>
				<td>
					<button class="threeButton" style="padding-top: 10%; padding-bottom: 10%; padding-right: 15%;padding-left: 15%" onclick="return deleteQuery()"><i class="far fa-edit"></i>
 				</td>
				<td>
					<button class="threeButton1" style="padding-top: 10%; padding-bottom: 10%; padding-right: 15%;padding-left: 15%"><i class="far fa-trash-alt"></i>
					
				</td>
			</tr>
		<?php

				}



		?>
		</table>
		<div style=" width: 100%; margin-left: 40%; margin-right: 40%">
			<button class="threeButton3">
				<i class="fas fa-angle-double-left"></i>
			</button>
			<button  style="background-color: #FFC300" class="threeButton3">
				<i>1</i>
			</button>
			<button class="threeButton3">
				<i>2</i>
			</button>
			<button class="threeButton3">
				<i>3</i>
			</button>
			<button class="threeButton3">
				<i>4</i>
			</button>
			<button class="threeButton3">
				<i class="fas fa-angle-double-right"></i>
			</button>
		</div>