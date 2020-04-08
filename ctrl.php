<?php

require_once 'init.php';

switch ($action) {
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
                //logowanie
               // include $conf->root_path.'/app/security/check.php';
		$ctrl->process ();
	break;
	
	case 'calcCompute2' :
		// zrób coś innego ...
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;

}
