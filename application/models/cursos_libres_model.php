<?php


class cursos_libres_model extends Model {

   
    public function get_computacion($get) {

        return $this->getAll('computacion_libre');
    }
    public function get_contabilidad($get) {

        return $this->getAll('contabilidad_libre');
    }
    public function get_diseno_publicitario($get) {

        return $this->getAll('disenio_publicitario_libre');
    }
    public function get_diseno_tecnico($get) {

        return $this->getAll('diseño_tecnico_libre');
    }
    public function get_electronica($get) {

        return $this->getAll('electronica_libre');
    }
    public function get_mecanica_automotriz($get) {

        return $this->getAll('mecanica_automotriz_libre');
    }
    public function get_secretariado($get) {

        return $this->getAll('secretariado_libre');
    }

   

}

?>
