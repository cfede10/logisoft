<?php
class Countries extends CActiveRecord {
	public static function model($ClassNmae = __CLASS__) // Metodo Statico que va a acceder al modelo, recibe por defecto. Metodo sin parametos
{
		return parent::model ( $ClassNmae ); // luego llama al padre que es CActiveRecord, invoca a model, model acepta un string con el nombre del modelo que quiero consultar
	}
	public function tableName() // NOMBRE DE LA TABLA para que yii sepa donde va a ir a apuntar este modelo
{
		return "countries"; // utilizar mismo nombre del modelo que de la tabla en miniscula para no tener problema
	}
	public function rules() // reglas de validacion
{
		return array ( // retornar un array con las regla de validacion
				array (
						"name, status",
						"required" 
				) 
		) // no validar aca el id

		;
	}
}