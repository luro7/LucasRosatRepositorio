<?php


if (!isset($_POST['searchTerms'])){
    $cli=PacientData::getAll();
}else{
    $buscar=$_POST['searchTerms'];
    $cli=PacientData::Buscar_cliente($buscar);
}
$data=array();
foreach($cli as $p):
    $nombre_completo=$p->nombre.' '.$p->apellido;
    $data[]=array(
      "id"=>$p->id,
      "text"=>$nombre_completo,
    );
endforeach;

echo json_encode($data);
exit;
