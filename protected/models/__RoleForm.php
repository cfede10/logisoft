<?php
class RoleForm extends CFormModel {
	public static $type = array (
			"Operation",
			"Task",
			"Role" 
	);
	public $name;
	public $description;
	public $type = 2;
	public function rules() {
		#return array(
		#	array("name, type","required"), //campos requeridos
		#	array("description","safe"), //safe se pone para decirle al framework que esto no tiene regla de validacion, le pones lo que sea
		#reglas de validacion
		
		#return array(
		#	array("name, type","required",), //campos requeridos
		#	array("description","ext.MyValidator"), //primer valor campo que queres validar, segundo valor la clase donde esta tu validacion
		
		#return array(
		#	array("name, type","required","message"=>"Esta mal este nombre {attribute}"), 
		#	array("description","safe"),

		return array(
			array("name, type","required","message"=>"Esta mal este nombre {attribute}"), 
			array("description","numerical","allowEmpty"=>false,"integerOnly"=>true), //que sea un numero y que no se permitan blancos y que sea solo entero

			array("description","email","message"=>"El {attribute} esta mal je je je "), //valida que sea un email

			array("description","exist","attibuteName"=>"username","ClassName"=>"Users","message"=>"El {attribute} esta mal je je je "), //va a la table users al campo username de la base de datos
			array("description","unique","attibuteName"=>"username","ClassName"=>"Users"), //PARA QUE LOS USUARIOS NO SE PUEDAN REPETIR

			array("description","filter","filter"=>"strtoupper"), //Pone a mayuscula

			array("description","filter","filter"=>"trim"), //quita los espacios a los costados que deja el usuario al completar un campo MUY IMPORTANTE


			//Si quisieramos validar algo nosotros mismos sin las clases de YII esto seria así

			array("description","validandoGuile"),			

			//TODAS ESTAS VALIDACIONES SON DEL LADO DEL SERVIDOR
	
	/*http: // www.yiiframework.com/wiki/56/reference-model-rules-validation#hh16
		
		numerical : CNumberValidator

	Validates that the attribute value is a number.

    allowEmpty, whether the attribute value can be null or empty. (true)
    integerOnly, whether the attribute value can only be an integer. (false)
    max, upper limit of the number. (null, meaning no limit)
    min, lower limit of the number. (null, meaning no limit)
    tooBig, user-defined error message used when the value is too big.
    tooSmall, user-defined error message used when the value is too small.
*/


		);
	}
	public function validandoGuille($attibute, $params) {
		// aca podrias hacer una colsulta a la base de datos y luego preguntar sobre eso
		if ($this->$attribute == "test")
			$this->addError ( $attribute, "Esto no puede ser test" ); // esta en el modelo
	}
}
