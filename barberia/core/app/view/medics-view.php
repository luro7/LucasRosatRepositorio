<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Barberos</h4>
  </div>
  <div class="card-content table-responsive">

      <!--<div class="btn-group">
          <a href="index.php?view=newmedic" class="btn btn-default"><i class='fa fa-support'></i> Nuevo Bar</a>
        <div class="btn-group pull-right">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-download"></i> Descargar <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="report/medicss-word.php">Word 2007 (.docx)</a></li>
        </ul>
      </div>
      </div>-->
		<?php

		$users = MedicData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Fecha Creación</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->nombre?></td>
				<td><?php echo $user->apellido; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->telefono; ?></td>
                <td><?php echo $user->fecha_creacion; ?></td>
				<!--<td><?php if($user->category_id!=null){ echo $user->getCategory()->nombre; } ?></td>-->
				<td style="width:280px;">
				<a href="index.php?view=medichistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editmedic&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delmedic&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>

				</td>
				</tr>
				<?php
?>
</table>
<?php
			}



		}else{
			echo "<p class='alert alert-danger'>No hay Barberos</p>";
		}


		?>

</div>
</div>
	</div>
</div>