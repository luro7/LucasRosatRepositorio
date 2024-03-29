<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>


<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Turnos</h4>
  </div>
  <div class="card-content table-responsive">
<a href="./index.php?view=newreservation" class="btn btn-info">Nuevo Turno</a>
<a href="./index.php?view=oldreservations" class="btn btn-default">Turnos Anteriores</a>
<br><br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reservations">
        <?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
        ?>

  <div class="form-group">
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-search"></i></span>
		  <input type="text" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-male"></i></span>
<select name="cliente_id" class="form-control">
<option value="">CLIENTE</option>
  <?php foreach($pacients as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["cliente_id"]) && $_GET["cliente_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->nombre." ".$p->apellido; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-support"></i></span>
<select name="barbero_id" class="form-control">
<option value="">BARBERO</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["barbero_id"]) && $_GET["barbero_id"]==$p->id){ echo "selected"; } ?>><?php echo $p->id." - ".$p->nombre." ".$p->apellido; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-4">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		  <input type="date" name="fecha" value="<?php if(isset($_GET["fecha"]) && $_GET["fecha"]!=""){ echo $_GET["fecha"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>

    <div class="col-lg-2">
    <button class="btn btn-primary btn-block">Buscar</button>
    </div>

  </div>
</form>

		<?php
$users= array();
if((isset($_GET["q"]) && isset($_GET["cliente_id"]) && isset($_GET["barbero_id"]) && isset($_GET["fecha"])) && ($_GET["q"]!="" || $_GET["cliente_id"]!="" || $_GET["barbero_id"]!="" || $_GET["fecha"]!="") ) {
$sql = "select * from agenda where ";
if($_GET["q"]!=""){
	$sql .= " title like '%$_GET[q]%' and note like '%$_GET[q] %' ";
}

if($_GET["cliente_id"]!=""){
if($_GET["q"]!=""){
	$sql .= " and ";
}
	$sql .= " cliente_id = ".$_GET["cliente_id"];
}

if($_GET["barbero_id"]!=""){
if($_GET["q"]!=""||$_GET["cliente_id"]!=""){
	$sql .= " and ";
}

	$sql .= " barbero_id = ".$_GET["barbero_id"];
}



if($_GET["fecha"]!=""){
if($_GET["q"]!=""||$_GET["cliente_id"]!="" ||$_GET["barbero_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " fecha = \"".$_GET["fecha"]."\"";
}

		$users = ReservationData::getBySQL($sql);

}else{
		$users = ReservationData::getAll();

}
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Asunto</th>
			<th>Cliente</th>
			<th>Barbero</th>
			<th>Fecha</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				$pacient  = $user->getPacient();
				$medic = $user->getMedic();
				?>
				<tr>
				<!-- <td><?php echo $user->title; ?></td> -->
				<td><?php echo $pacient->nombre." ".$pacient->apellido; ?></td>
				<td><?php echo $medic->nombre." ".$medic->apellido; ?></td>
				<td><?php echo $user->fecha." ".$user->hora; ?></td>
				<td style="width:180px;">
				<a href="index.php?view=editreservation&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delreservation&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}
			?>
			</table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay Clientes</p>";
		}


		?>


	</div>
</div>