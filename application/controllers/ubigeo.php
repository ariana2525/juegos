
<?php

class Ubigeo extends Controller {

    function __construct() {

        $this->data['controller'] = strtolower(get_class($this));
    }

    function get_provincias_ajax() {

    	$_id=$_POST['id'];

        $_info_ubigeo = $this->loadModel('ubigeo_model');
		$_items_provincia= $_info_ubigeo->getprovincias_by_id($_id);
		if ($_items_provincia) {
			$json=array('status'=>true,'data'=>$_items_provincia);
			
		}else{
			$json=array('status'=>false);
		}
		exit(json_encode($json));



    }

    function get_distrito_ajax() {

    	$_id=$_POST['id'];
    	
    	

        $_info_ubigeo = $this->loadModel('ubigeo_model');
		$_items_distrito= $_info_ubigeo->getdistritos_by_id($_id);
		if ($_items_distrito) {
			$json=array('status'=>true,'data'=>$_items_distrito);
			
		}else{
			$json=array('status'=>false);
		}
		exit(json_encode($json));


    }

}
?>

