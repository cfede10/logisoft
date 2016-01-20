<?php
class MyValidator extends CValidator {
	public $word = "test";
	public function validateAttibute($object, $attibute) {
		if ($object->$attibute == $this->word) // valor que puso el usuario en ese campo
			$this->addError ( $object, $attibute, "Esto es un error man" );
	}
}