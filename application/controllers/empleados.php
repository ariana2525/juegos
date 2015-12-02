
<?php

class Empleados extends Controller {

    function __construct() {

        $this->data['controller'] = strtolower(get_class($this));
    }

    function load_list() {

        $_info_empleados = $this->loadModel('empleados_model');
        $_items_empleados = $_info_empleados->get();



        $template = $this->loadView($this->data['controller'] . '/load_list');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_empleados', $_items_empleados);


        $template->render();
    }

    function load_login(){
        $template = $this->loadView($this->data['controller'] . '/load_login');
        $template->set('controlador', $this->data['controller']);
        $template->render();
    }




    function load_add() {



        $_info_paises = $this->loadModel('ubigeo_model');

        
    
        
       
       $_paises=$this->_build_select_options($_items_paises,"id","nombre");
       $_profesion=$this->_build_select_options( $_items_profesion,"id","nombre");
       $_departamentos=$this->_build_select_options( $_items_departamento,"idDepa","departamento");
       $_tipousuario=$this->_build_select_options( $_items_tipousu,"id","tipo");
       



     


        $template = $this->loadView($this->data['controller'] . '/load_add');
        $template->set('controlador', $this->data['controller']);
        $template->set('paises',$_paises);
        $template->set('profesion', $_profesion);
        $template->set('departamento',$_departamentos);
        $template->set('tipousuario',$_tipousuario);
       
        $template->render();
    }


    


    function load_update($id) {



        $_info_empleados = $this->loadModel('empleados_model');
        $_item_empleados =  $_info_empleados->get_id($id);


      
     



        $template = $this->loadView($this->data['controller'] . '/load_update');
        $template->set('controlador', $this->data['controller']);
  
        $template->set('item_empleados', $_item_empleados);


        $template->render();
    }



     function load_delete($id) {

        $_info_empleados = $this->loadModel('empleados_model');
        $_item_empleados =  $_info_empleados->get_id($id);


      //var_dump( $_item_empleados);

        $template = $this->loadView($this->data['controller'] . '/load_delete');
        $template->set('controlador', $this->data['controller']);

        $_info_paises = $this->loadModel('ubigeo_model');

       

        


        $template = $this->loadView($this->data['controller'] . '/load_delete');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_paises', $_items_paises);
        $template->set('items_profesion', $_items_profesion);
        $template->set('items_departamentos', $_items_departamentos);
        $template->set('items_provincia',$_items_provincias);
         $template->set('items_distrito',$_items_distrito);
         $template->set('item_empleados', $_item_empleados);

        $template->render();
    }

     function login_usuario(){

          $_post =  $_POST;
        $id=$_post['id'];

        $_result = $this->loadModel('empleados_model');

        $_item = $_result->get_login($id);


        if ($_item) {
           echo '<script language="javascript">alert("Personal Eliminado");</script>';
        }else
             echo '<script language="javascript">alert("Error al Eliminar");</script>';

    }




    function add_empleados(){

        //$_post = $_POST['name'];
    $_post =  $_POST;
    
   
        $_result = $this->loadModel('empleados_model');
        $_item = $_result->add($_post);
     
       
        if ($_item) {
            echo "insertooooooooooooo";
        }else
            echo "Errrrror";

    }

     



    function action_update(){

        //$_post = $_POST['name'];
        $_post =  $_POST;
        $id=$_post['cod_producto'];

       

        $_result = $this->loadModel('empleados_model');

        $_item = $_result->modificar($_post,$id);


        if ($_item) {
           echo '<script language="javascript">alert("Personal Modificado");</script>';
        }else
             echo '<script language="javascript">alert("Error al Modificar");</script>';

    }

    function action_delete(){

        //$_post = $_POST['name'];
         $_post =  $_POST;
        $id=$_post['id'];

        $_result = $this->loadModel('empleados_model');

        $_item = $_result->eliminar($id);


        if ($_item) {
           echo '<script language="javascript">alert("Personal Eliminado");</script>';
        }else
             echo '<script language="javascript">alert("Error al Eliminar");</script>';

    }



    function _build_select_options($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


        if (empty($_value_key))
            return '';

        if (empty($_name_key))
            return '';


        $_html = '<option value="">-- Seleccione --</option>';


        $_count_data = count($_data);
        for ($_i = 0; $_i < $_count_data; $_i++) {
            $_data_item = $_data[$_i];


            $_selected_value = '';
            if ($_selected) {
                if ($_selected == $_data_item->$_value_key)
                    $_selected_value = 'selected=""';
            }


            $_html .= '<option ' . $_selected_value . ' value="' . $_data_item->$_value_key . '">' . $_data_item->$_name_key . '</option>';
        }


        return $_html;
    }


  

}
?>

