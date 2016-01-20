<?php

/**
 * This is the model class for table "contactoproveedor".
 *
 * The followings are the available columns in table 'contactoproveedor':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $tipodoc
 * @property string $nrodoc
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property integer $proveedor_id
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Proveedor $proveedor
 */
class Contactoproveedor extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'contactoproveedor';
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
						'nombre, apellido, tipodoc, nrodoc, proveedor_id',
						'required' 
				),
				array (
						'proveedor_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'nombre, apellido, tipodoc, nrodoc, telefono, celular, email, creadopor, modificadopor',
						'length',
						'max' => 45 
				),
				array (
						'fechacreacion, fechamodificacion',
						'safe' 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array (
						'id, nombre, apellido, tipodoc, nrodoc, telefono, celular, email, proveedor_id, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
				'proveedor' => array (
						self::BELONGS_TO,
						'Proveedor',
						'proveedor_id' 
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
				'nombre' => 'Nombre',
				'apellido' => 'Apellido',
				'tipodoc' => 'Tipo de doc',
				'nrodoc' => 'Nro de doc',
				'telefono' => 'Telefono',
				'celular' => 'Celular',
				'email' => 'Email',
				'proveedor_id' => 'Proveedor',
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
		$criteria->compare ( 'nombre', $this->nombre, true );
		$criteria->compare ( 'apellido', $this->apellido, true );
		$criteria->compare ( 'tipodoc', $this->tipodoc, true );
		$criteria->compare ( 'nrodoc', $this->nrodoc, true );
		$criteria->compare ( 'telefono', $this->telefono, true );
		$criteria->compare ( 'celular', $this->celular, true );
		$criteria->compare ( 'email', $this->email, true );
		$criteria->compare ( 'proveedor_id', $this->proveedor_id );
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
	public function getMenuProveedores() {
		return CHtml::listData ( Proveedor::model ()->findAll (), "id", "razonsocial" );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Contactoproveedor the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
