<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id
 * @property string $nombrecomercial
 * @property string $razonsocial
 * @property string $cuit
 * @property string $llbb
 * @property integer $situacionimpositiva_id
 * @property string $domiciliolegal
 * @property string $domiciodeposito
 * @property integer $telefono
 * @property string $celular
 * @property string $emailempresarial1
 * @property string $emailempresarial2
 * @property integer $localidad_id
 * @property integer $provincia_id
 * @property integer $iva_id
 * @property integer $descuento_id
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Descuento $descuento
 * @property Iva $iva
 * @property Localidad $localidad
 * @property Provincia $provincia
 * @property Situacionimpositiva $situacionimpositiva
 * @property Contactocliente[] $contactoclientes
 * @property Pedidodeventa[] $pedidodeventas
 */
class Cliente extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'cliente';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'razonsocial, situacionimpositiva_id, telefono, celular, localidad_id, provincia_id, iva_id, descuento_id',
						'required' 
				),
				array (
						'situacionimpositiva_id, telefono, localidad_id, provincia_id, iva_id, descuento_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'nombrecomercial, cuit, llbb, domiciliolegal, domiciodeposito, celular, emailempresarial1, emailempresarial2, creadopor, modificadopor',
						'length',
						'max' => 45 
				),
				array (
						'emailempresarial1',
						'email' 
				),
				array (
						'emailempresarial2',
						'email' 
				),
				array (
						'razonsocial',
						'length',
						'max' => 90 
				),
				array (
						'fechacreacion, fechamodificacion',
						'safe' 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array (
						'id, nombrecomercial, razonsocial, cuit, llbb, situacionimpositiva_id, domiciliolegal, domiciodeposito, telefono, celular, emailempresarial1, emailempresarial2, localidad_id, provincia_id, iva_id, descuento_id, fechacreacion, fechamodificacion, creadopor, modificadopor',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
				'descuento' => array (
						self::BELONGS_TO,
						'Descuento',
						'descuento_id' 
				),
				'iva' => array (
						self::BELONGS_TO,
						'Iva',
						'iva_id' 
				),
				'localidad' => array (
						self::BELONGS_TO,
						'Localidad',
						'localidad_id' 
				),
				'provincia' => array (
						self::BELONGS_TO,
						'Provincia',
						'provincia_id' 
				),
				'situacionimpositiva' => array (
						self::BELONGS_TO,
						'Situacionimpositiva',
						'situacionimpositiva_id' 
				),
				'contactoclientes' => array (
						self::HAS_MANY,
						'Contactocliente',
						'cliente_id' 
				),
				'pedidodeventas' => array (
						self::HAS_MANY,
						'Pedidodeventa',
						'cliente_id' 
				) 
		);
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'nombrecomercial' => 'Nombre comercial',
				'razonsocial' => 'Razon social',
				'cuit' => 'Cuit',
				'llbb' => 'Llbb',
				'situacionimpositiva_id' => 'Situacion impositiva',
				'domiciliolegal' => 'Domicilio legal',
				'domiciodeposito' => 'Domicio del deposito',
				'telefono' => 'Telefono',
				'celular' => 'Celular',
				'emailempresarial1' => 'Email empresarial',
				'emailempresarial2' => 'Email empresarial 2',
				'localidad_id' => 'Localidad',
				'provincia_id' => 'Provincia',
				'iva_id' => 'Iva',
				'descuento_id' => 'Descuento',
				'fechacreacion' => 'Fecha de creacion',
				'fechamodificacion' => 'Fecha de modificacion',
				'creadopor' => 'Creado por',
				'modificadopor' => 'Modificado por' 
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
	 *         based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'id', $this->id );
		$criteria->compare ( 'nombrecomercial', $this->nombrecomercial, true );
		$criteria->compare ( 'razonsocial', $this->razonsocial, true );
		$criteria->compare ( 'cuit', $this->cuit, true );
		$criteria->compare ( 'llbb', $this->llbb, true );
		$criteria->compare ( 'situacionimpositiva_id', $this->situacionimpositiva_id );
		$criteria->compare ( 'domiciliolegal', $this->domiciliolegal, true );
		$criteria->compare ( 'domiciodeposito', $this->domiciodeposito, true );
		$criteria->compare ( 'telefono', $this->telefono );
		$criteria->compare ( 'celular', $this->celular, true );
		$criteria->compare ( 'emailempresarial1', $this->emailempresarial1, true );
		$criteria->compare ( 'emailempresarial2', $this->emailempresarial2, true );
		$criteria->compare ( 'localidad_id', $this->localidad_id );
		$criteria->compare ( 'provincia_id', $this->provincia_id );
		$criteria->compare ( 'iva_id', $this->iva_id );
		$criteria->compare ( 'descuento_id', $this->descuento_id );
		$criteria->compare ( 'fechacreacion', $this->fechacreacion, true );
		$criteria->compare ( 'fechamodificacion', $this->fechamodificacion, true );
		$criteria->compare ( 'creadopor', $this->creadopor, true );
		$criteria->compare ( 'modificadopor', $this->modificadopor, true );
		
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
	public function getMenuSituacionesImpositivas() {
		return CHtml::listData ( Situacionimpositiva::model ()->findAll (), "id", "descripcion" );
	}
	public function getMenuProvincias() {
		// $provincias=Provincia::model()->findAll()
		// return CHtml::listData($provincias,"id","nombre");
		return CHtml::listData ( Provincia::model ()->findAll (), "id", "nombre" );
	}
	public function getMenuLocalidades($defultProv = 3) {
		$Localidades = Localidad::model ()->findAll ( "provincia_id=?", array (
				$defultProv 
		) );
		return CHtml::listData ( $Localidades, "id", "nombre" );
	}
	public function getMenuIvas() {
		return CHtml::listData ( Iva::model ()->findAll (), "id", "porcentaje", "descripcion" );
	}
	public function getMenuDescuentos() {
		return CHtml::listData ( Descuento::model ()->findAll (), "id", "porcentaje", "descripcion" );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
