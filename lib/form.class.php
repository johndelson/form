<?PHP

/**
 * PHP SAMPLE CODE
 * FORM SUBMIT WEB
 * FORM.CLASS.php file 
 */

class FormSubmit {
  public $var = array(
	'template'  => 'theme/',
	'code'		=>  200,
	'formVar' 	=> array(
		'Name' => array('req'=>true,'min'=>4,'max'=>10,'type'=>'text'),
		'Message' => array('req'=>true,'min'=>4,'max'=>255,'type'=>'textarea'),
		'ToNum' => array('req'=>true,'min'=>8,'max'=>12,'type'=>'phone'),
		'FromNum' => array('req'=>false,'min'=>8,'max'=>12,'type'=>'phone')),
  );
  public $msg = array();
  public $fclass = array();
  public $val = array();
  public function init()  {
	  
	  
	//init stuff
	foreach($this->var['formVar'] as $vv => $v) {
		$this->val[$v] = '';
		$this->msg[$v] = '';
		
	}
  }
  public function viewTPL($v) {
	// include some file check here...
	include($this->var['template'] . $v);
  }
  public function verify() {
	// verify each post var
	$P = $_POST;


	// verify based on base settings
	foreach($this->var['formVar'] as $vv => $v) {
		$this->val[$vv] = @$P[$vv];
		if ($v['req'] == true) {
			// if missing
			if (!@$P[$vv] ) {
				$this->msg[$vv] = 'Error! Please input the required field.';
				$this->fclass[$vv] = 'error-field';
				$this->var['code'] = 300;			
			} else {
				
			
				// verify for minimum length zzzzzzz .. damn sleepy
				if (strlen($P[$vv]) <= $v['min'] || strlen($P[$vv]) >= $v['max']) {
					$this->msg[$vv] = 'Error! Minimum ['.$v['min'].'] / Maximum ['.$v['max'].'] length';
					$this->fclass[$vv] = 'error-field';
					$this->var['code'] = 300;	
				}
				
				// do that thing.
				switch($v['type']) {
					case 'text':
						// text verify
					break;
					
					case 'textarea':
						// verify textarea...
					break;
					
					case 'phone':
				
						// not really sure how to do this... normally i would just let the js do interface verification with xxx-xxx-xxxx masking
						// strip the - in the php and just have a pure number as the input.
						$s = $P[$vv];
						// strip every damn thing except numbers
						$s = preg_replace("/[^0-9]/", '', $s);
						
						if (strlen($s) != 9 ) { 
							$this->msg[$vv] = 'Error! Phone number be 9 digits [0-9 only]';
							$this->fclass[$vv] = 'error-field';
							$this->var['code'] = 300;	
						}
						$this->val[$vv] = $s;
					break;
					
				}
			}
		}
		
	}

	
	// custom verification
	
	
  }
  
  
}
?>