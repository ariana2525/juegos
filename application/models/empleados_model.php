<?php

//Distritos_model

class empleados_model extends Model {

    

    public function add($_post) {
        //profesion
        return $this->Insertar('producto', $_post);
        
    }

    

    public function modificar($_post,$id) {
        

        return $this->Update('producto', $_post, array('cod_producto' => $id));

    }

    public function eliminar($id) {
        

        return $this->Delete('producto',array('cod_producto' => $id));

    }

    public function get($get) {

        return $this->getAll('producto');
    }

    public function get_id($id){

return $this->getOne('producto',array('cod_producto'=>$id));

    }

    

    

}

?>
