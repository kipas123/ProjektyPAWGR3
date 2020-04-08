<?php

require_once 'init.php';

switch ($action) {
	case 'calcCompute' :
		// załaduj definicję kontrolera
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
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
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;

}
