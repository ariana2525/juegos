<?php

//Distritos_model

class ubigeo_model extends Model {

    public function get_paises() {
        return $this->getAll('paises');
    }

     public function get_profesion() {
        return $this->getAll('profesion');
    }

    public function get_departamentos() {

        return $this->getAll('ubdepartamento');
    }

    public function get_provincias() {

        return $this->getAll('ubprovincia');
    }

     public function get_distritos() {

        return $this->getAll('ubdistrito');
    }
     public function get_tipousu() {

        return $this->getAll('tipo_usuario');
    }

    public function getprovincias_by_id($id){
     return $this->getAll('ubprovincia',array('idDepa'=>$id));
    }

     public function getdistritos_by_id($id){
     return $this->getAll('ubdistrito',array('idProv'=>$id));
    }

}

?>
