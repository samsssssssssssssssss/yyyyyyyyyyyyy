<?php
class provinciaaa
{   public $vlsec_id;
    public $vlsec_nombre;
    public $vlsec_observacion;
    public function __construct()
    {
        $this->vlsec_id="";
        $this->vlsec_nombre="";
        $this->vlsec_observacion="";
    }
    public function _insertar($vlsec_nombre, $vlsec_observacion){
        require_once("../../conexion/conexion.php");
        //$dmlsentencia="insert into si_provincias(sec_nombre,sec_observacion) values ('vlsec_nombre ','vlsec_observacion')";
        $dmlsentencia="insert into si_provincias(sec_nombre,sec_observacion) values ('" . $vlsec_nombre . "','" . $vlsec_observacion . "')";
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from si_provincias";
        }
        else
        {
            $dmlsentencia="select * from si_provincias where sec_nombre like '%s', %".$valor."%";
        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $nombre, $observacion)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>