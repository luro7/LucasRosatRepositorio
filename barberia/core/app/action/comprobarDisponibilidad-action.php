<?php
$servicio=CategoryData::getById($_GET["servicio_id"]);
$reservation = ReservationData::getById($_GET["id"]);

$serv = CategoryData::getAll();

function calc_tiempo($hora_i,$duracion) {
    return date('H:i', strtotime($hora_i) + $duracion);
}
//$rta = ReservationData::DisponibilidadTurno(1,'2019-05-14','11:30',calc_tiempo('11:30',$duracion));
//var_dump($_SESSION["barbero"]);
$rta = ReservationData::DisponibilidadTurno($_SESSION["barbero"],$_GET["fecha"],$_GET["hora"],calc_tiempo($_GET["hora"],3599));
$rta_HoraMedia = ReservationData::DisponibilidadTurno_HoraMedia($_SESSION["barbero"],$_GET["fecha"],$_GET["hora"],calc_tiempo($_GET["hora"],5399));

var_dump($rta);
//var_dump($rta_HoraMedia);
if ($_GET["hora"]=="19:30"){
    foreach ($serv as $p):
        if ($p->tiempo == 1800) {
            echo '<option value="' . $p->id . '" ' . (($p->id == $servicio->id) ? 'selected="selected"' : "") . '>' . $p->nombre . '</option>';
        }
    endforeach;
}else {
    if ($_GET["hora"] == "19:00") {
        foreach ($serv as $p):
            if (($p->tiempo == 1800) || ($p->tiempo == 3600)) {
                echo '<option value="' . $p->id . '" ' . (($p->id == $servicio->id) ? 'selected="selected"' : "") . '>' . $p->nombre . '</option>';
            }
        endforeach;
    }else {
        if ($rta != null) {
            foreach ($serv as $p):
                if ($p->tiempo == 1800) {
                    echo '<option value="' . $p->id . '" ' . (($p->id == $servicio->id) ? 'selected="selected"' : "") . '>' . $p->nombre . '</option>';
                }
            endforeach;
        } else {
            if (($rta != null) and (($rta->tiempo)) == 3600) {
                foreach ($serv as $p):
                    echo '<option value="' . $p->id . '" ' . (($p->id == $servicio->id) ? 'selected="selected"' : "") . '>' . $p->nombre . '</option>';
                endforeach;
            } else {
                if (($rta == null) and ($rta_HoraMedia==null)) {
                    foreach ($serv as $p):
                        echo '<option value="' . $p->id . '" ' . (($p->id == $servicio->id) ? 'selected="selected"' : "") . '>' . $p->nombre . '</option>';
                    endforeach;
                }else{
                    if (($rta == null) and ($rta_HoraMedia!=null)) {
                        foreach ($serv as $p):
                            if (($p->tiempo == 1800) || ($p->tiempo == 3600)) {
                                echo '<option value="' . $p->id . '" ' . (($p->id == $servicio->id) ? 'selected="selected"' : "") . '>' . $p->nombre . '</option>';
                            }
                        endforeach;
                    }
                }
            }

        }
    }
}

?>