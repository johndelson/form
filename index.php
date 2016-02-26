<?PHP

/**
 * PHP SAMPLE CODE
 * FORM SUBMIT WEB
 * INDEX.php file 
 */

include('lib/form.class.php');

$tpl = new FormSubmit();


$page = !isset($_GET['p']) ? 'form' : $_GET['p'];

switch($page) {
	case 'form':
	default:
	
		$tpl->viewTPL('form.tpl.php');
		
	break;
	
	case 'submit':
		$tpl->verify();
		if ($tpl->var['code'] == 200) {
			$tpl->saveForm();
			$tpl->viewTPL('submit.tpl.php');
		} else 
			$tpl->viewTPL('form.tpl.php');
	break;
	
}

?>