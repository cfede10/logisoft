<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $tipousuario_id
 * @property integer $status
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Tipousuario $tipousuario
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, tipousuario_id', 'required'),
			array('tipousuario_id, status', 'numerical', 'integerOnly'=>true),
			array('username, password, creadopor, modificadopor', 'length', 'max'=>45),
			array('fechacreacion, fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, tipousuario_id, status, fechacreacion, fechamodificacion, creadopor, modificadopor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			//'tipousuario' => array(self::BELONGS_TO, 'Tipousuario', 'tipousuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'tipousuario_id' => 'Tipo de usuario',
			'status' => 'Status',
			'fechacreacion' => 'Fecha de creacion',
			'fechamodificacion' => 'Fecha de modificacion',
			'creadopor' => 'Creado por',
			'modificadopor' => 'Modificado por',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'username', $this->username, true );
		$criteria->compare ( 'password', $this->password, true );
		$criteria->compare ( 'tipousuario_id', $this->tipousuario_id );
		$criteria->compare ( 'status', $this->status = 1 );
		$criteria->compare ( 'creadopor', $this->creadopor, true );
		$criteria->compare ( 'modificadopor', $this->modificadopor, true );
		/*
		 * $criteria->compare('fechacreacion',$this->fechacreacion,true);
		 * $criteria->compare('fechamodificacion',$this->fechamodificacion,true);
		 */
		
		if (! empty ( $this->fechacreacion )) {
			$operador = "";
			$fechacreacion = str_replace ( ' ', '', $this->fechacreacion ); // me quita los espacios
			                                                         // die($fechacreacion); termina el programa y muestra el valor en pantalla
			if (substr ( $fechacreacion, 0, 2 ) == ">=" || substr ( $fechacreacion, 0, 2 ) == "<=") {
				$operador = substr ( $fechacreacion, 0, 2 );
				$fechacreacion = substr ( $this->fechacreacion, 2 ); // $fechacreacion va a tener la fecha sin el > son convertir
			}
			
			if (substr ( $fechacreacion, 0, 1 ) == ">" || substr ( $fechacreacion, 0, 1 ) == "<") {
				$operador = substr ( $fechacreacion, 0, 1 );
				$fechacreacion = substr ( $this->fechacreacion, 1 ); // $fechacreacion va a tener la fecha sin el > son convertir
			}
			
			$fechacreacionarray = explode ( "/", $fechacreacion ); // saco las barras y convierto
			if (isset ( $fechacreacionarray [0] ) && isset ( $fechacreacionarray [1] ) && isset ( $fechacreacionarray [2] ))
				$fechacreacion = sprintf ( '%04d-%02d-%02d', $fechacreacionarray [2], $fechacreacionarray [1], $fechacreacionarray [0] );
			
			$criteria->compare ( 'fechacreacion', $operador . $fechacreacion, true );
		}
		
		// fecha modificacion
		if (! empty ( $this->fechamodificacion )) {
			$operador = "";
			$fechamodificacion = str_replace ( ' ', '', $this->fechamodificacion ); // me quita los espacios
			                                                                 // die($fechacreacion); termina el programa y muestra el valor en pantalla
			if (substr ( $fechamodificacion, 0, 2 ) == ">=" || substr ( $fechamodificacion, 0, 2 ) == "<=") {
				$operador = substr ( $fechamodificacion, 0, 2 );
				$fechamodificacion = substr ( $this->fechamodificacion, 2 ); // $fechacreacion va a tener la fecha sin el > son convertir
			}
			
			if (substr ( $fechamodificacion, 0, 1 ) == ">" || substr ( $fechamodificacion, 0, 1 ) == "<") {
				$operador = substr ( $fechamodificacion, 0, 1 );
				$fechamodificacion = substr ( $this->fechamodificacion, 1 ); // $fechacreacion va a tener la fecha sin el > son convertir
			}
			
			$fechamodificacionarray = explode ( "/", $fechamodificacion ); // saco las barras y convierto
			if (isset ( $fechamodificacionarray [0] ) && isset ( $fechamodificacionarray [1] ) && isset ( $fechamodificacionarray [2] ))
				$fechamodificacion = sprintf ( '%04d-%02d-%02d', $fechamodificacionarray [2], $fechamodificacionarray [1], $fechamodificacionarray [0] );
			
			$criteria->compare ( 'fechamodificacion', $operador . $fechamodificacion, true );
		}
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	// FECHA CREACION FECHA MODIFICACION
	public function behaviors() {
		return array (
				'CTimestampBehavior' => array (
						'class' => 'zii.behaviors.CTimestampBehavior',
						'createAttribute' => 'fechacreacion',
						'updateAttribute' => 'fechamodificacion',
						'setUpdateOnCreate' => true
				),
				'BlameableBehavior' => array (
						'class' => 'application.components.behaviors.BlameableBehavior',
						'createdByColumn' => 'creadopor',
						'updatedByColumn' => 'modificadopor'
				)
		);
	}
	public function getMenuTipodeusuarios() {
		return CHtml::listData ( Tipousuario::model ()->findAll (), "id", "descripcion" );
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
