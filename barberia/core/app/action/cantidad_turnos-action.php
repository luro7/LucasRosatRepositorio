<?php
$sql="SELECT count(*) as cuenta FROM agenda where barbero_id=".$_SESSION["barbero"]." and inactivo=0 and fecha=curdate()";
$users2 = ReservationData::getBySQL($sql);

echo (string)($users2[0]->cuenta);

