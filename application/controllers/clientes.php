
<?php

class Clientes extends Controller {

    function __construct() {

        $this->data['controller'] = strtolower(get_class($this));
    }

  

  
  function load_list() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get();

        $template = $this->loadView($this->data['controller'] . '/load_list');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }

      


 



     function load_add() {



       
        $_info_carreras = $this->loadModel('clientes_model');
         $_info_libres = $this->loadModel('cursos_libres_model');
        $_items_carreras = $_info_carreras->get_carreras();


        ////////////////////CURSOS LIBRES/////////////////////////////
        $_items_computacion = $_info_libres->get_computacion();
        $_items_contabilidad = $_info_libres->get_contabilidad();
        $_items_publicitario = $_info_libres->get_diseno_publicitario();
       
       
        $_items_electronica = $_info_libres->get_electronica();
        $_items_mecanica = $_info_libres->get_mecanica_automotriz();

        /*$_items_secretariado = $_info_libres->get_secretariado();
        ////////////////////FINLIBRES///////////////////////////// */
     
       
       $_carreras=$this->carreras( $_items_carreras,"id","nombre_carrera");

        ////////////////////CURSOS LIBRES/////////////////////////////
       $_computacion=$this->computacion_libre($_items_computacion,"id","nombre");
       $_contabilidad=$this->contabilidad_libre($_items_contabilidad,"id","nombre");
      $_publicitario=$this->disenio_publicitario($_items_publicitario,"id","nombre");
     
     
       
        $_electronica=$this->electronica_libre( $_items_electronica,"id","nombre");
       $_mecanica=$this->mecanica_automotriz_libre( $_items_mecanica,"id","nombre");
        /*  $_secretariado=$this->secretariado_libre( $_items_secretariado,"id","nombre");
       ////////////////////FINLIBRES///////////////////////////// */

     

        $template = $this->loadView($this->data['controller'] . '/load_add');
        $template->set('controlador', $this->data['controller']);
        $template->set('carreras', $_carreras);
        ////////////////////CURSOS LIBRES///////////////////////////// 
        $template->set('computacion', $_computacion);
        $template->set('contabilidad', $_contabilidad);
        $template->set('publicitario', $_publicitario);
    
    
        
       $template->set('electronica', $_electronica);
        $template->set('mecanica', $_mecanica);
         /*$template->set('secretariado', $_secretariado);
        ////////////////////FINLIBRES///////////////////////////// */
 
        $template->render();
    }

function load_update($id) { 
       
        $_info_clientes = $this->loadModel('clientes_model');
        $_item_clientes =  $_info_clientes->get_id($id);

       
        $template = $this->loadView($this->data['controller'] . '/load_update');
        
        $template->set('controlador', $this->data['controller']);
        $template->set('item_clientes', $_item_clientes);
        $template->render();


        var_dump(expression)
        
    } 


 

    function add_clientes(){

        //$_post = $_POST['name'];
    $_post =  $_POST;
    

        $_result = $this->loadModel('clientes_model');
        $_item = $_result->add($_post);
        if ($_item) {
            echo "insertooooooooooooo";
        }else
            echo "Errrrror";

    }

 

     function carreras($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


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


     function computacion_libre($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


        if (empty($_value_key))
            return '';

        if (empty($_name_key))
            return '';


        $_html = '<option value="">-- COMBUTACION --</option><br>';


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

    function contabilidad_libre($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


        if (empty($_value_key))
            return '';

        if (empty($_name_key))
            return '';


        $_html = '<option value="">-- CONTABILIDAD --</option>';


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

     function disenio_publicitario($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


        if (empty($_value_key))
            return '';

        if (empty($_name_key))
            return '';


        $_html = '<option value="">-- DISEÑO PUBLICITARIO --</option>';


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



    function electronica_libre($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


        if (empty($_value_key))
            return '';

        if (empty($_name_key))
            return '';


        $_html = '<option value="">-- ELECTRONICA --</option>';


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

    function mecanica_automotriz_libre($_data = array(), $_value_key, $_name_key, $_selected = FALSE) {


        if (empty($_value_key))
            return '';

        if (empty($_name_key))
            return '';


        $_html = '<option value="">-- MECANICA AUTOMOTRIZ --</option>';


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

    function load_enero() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_enero();
        $template = $this->loadView($this->data['controller'] . '/load_enero');
        
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_febrero() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_febrero();

        $template = $this->loadView($this->data['controller'] . '/load_febrero');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }

    function load_marzo() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_marzo();

        $template = $this->loadView($this->data['controller'] . '/load_marzo');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }

      function load_abril() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_abril();

        $template = $this->loadView($this->data['controller'] . '/load_abril');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }


    function load_mayo() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_mayo();

        $template = $this->loadView($this->data['controller'] . '/load_mayo');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_junio() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_junio();

        $template = $this->loadView($this->data['controller'] . '/load_junio');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_julio() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_julio();

        $template = $this->loadView($this->data['controller'] . '/load_julio');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_agosto() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_agosto();

        $template = $this->loadView($this->data['controller'] . '/load_agosto');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_setiembre() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_setiembre();

        $template = $this->loadView($this->data['controller'] . '/load_setiembre');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_octubre() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_octubre();

        $template = $this->loadView($this->data['controller'] . '/load_octubre');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_noviembre() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_noviembre();

        $template = $this->loadView($this->data['controller'] . '/load_noviembre');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
    function load_diciembre() {
        $_info_clientes = $this->loadModel('clientes_model');
        $_items_clientes = $_info_clientes->get_diciembre();

        $template = $this->loadView($this->data['controller'] . '/load_diciembre');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_clientes', $_items_clientes);
        $template->render();
    }
     
     

}
?>

