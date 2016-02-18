<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $id
 * @property string $razonsocial
 * @property string $cuit
 * @property string $domiciliolegal
 * @property string $domiciliodeposito
 * @property integer $provincia_id
 * @property integer $localidad_id
 * @property string $emailempresarial1
 * @property string $emailempresarial2
 * @property integer $iva_id
 * @property string $telfijo
 * @property string $banco
 * @property string $sucursul
 * @property integer $tipodecuenta_id
 * @property string $numcuenta
 * @property string $cbu
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Contactoproveedor[] $contactoproveedors
 * @property Pedidocompra[] $pedidocompras
 * @property Producto[] $productos
 * @property Iva $iva
 * @property Localidad $localidad
 * @property Provincia $provincia
 * @property Tipodecuenta $tipodecuenta
 */
class Proveedor extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'proveedor';
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
						'razonsocial, domiciliolegal, provincia_id, localidad_id, iva_id, tipodecuenta_id',
						'required' 
				),
				array (
						'provincia_id, localidad_id, iva_id, tipodecuenta_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'razonsocial, cuit, domiciliolegal, domiciliodeposito, emailempresarial1, emailempresarial2, telfijo, banco, sucursul, numcuenta, cbu, creadopor, modificadopor',
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
						'id, razonsocial, cuit, domiciliolegal, domiciliodeposito, provincia_id, localidad_id, emailempresarial1, emailempresarial2, iva_id, telfijo, banco, sucursul, tipodecuenta_id, numcuenta, cbu, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
				'contactoproveedors' => array (
						self::HAS_MANY,
						'Contactoproveedor',
						'proveedor_id' 
				),
				'pedidocompras' => array (
						self::HAS_MANY,
						'Pedidocompra',
						'proveedor_id' 
				),
				'productos' => array (
						self::HAS_MANY,
						'Producto',
						'proveedor_id' 
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
				'tipodecuenta' => array (
						self::BELONGS_TO,
						'Tipodecuenta',
						'tipodecuenta_id' 
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
				'razonsocial' => 'Razon social',
				'cuit' => 'Cuit',
				'domiciliolegal' => 'Dcilio legal',
				'domiciliodeposito' => 'Dcilio deposito',
				'provincia_id' => 'Provincia',
				'localidad_id' => 'Localidad',
				'emailempresarial1' => 'Email empresarial 1',
				'emailempresarial2' => 'Email empresarial 2',
				'iva_id' => 'Iva',
				'telfijo' => 'Telefono fijo',
				'banco' => 'Banco',
				'sucursul' => 'Sucursul',
				'tipodecuenta_id' => 'Tipo de cta',
				'numcuenta' => 'Numero de cuenta',
				'cbu' => 'Cbu',
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
		$criteria->compare ( 'razonsocial', $this->razonsocial, true );
		$criteria->compare ( 'cuit', $this->cuit, true );
		$criteria->compare ( 'domiciliolegal', $this->domiciliolegal, true );
		$criteria->compare ( 'domiciliodeposito', $this->domiciliodeposito, true );
		$criteria->compare ( 'provincia_id', $this->provincia_id );
		$criteria->compare ( 'localidad_id', $this->localidad_id );
		$criteria->compare ( 'emailempresarial1', $this->emailempresarial1, true );
		$criteria->compare ( 'emailempresarial2', $this->emailempresarial2, true );
		$criteria->compare ( 'iva_id', $this->iva_id );
		$criteria->compare ( 'telfijo', $this->telfijo, true );
		$criteria->compare ( 'banco', $this->banco, true );
		$criteria->compare ( 'sucursul', $this->sucursul, true );
		$criteria->compare ( 'tipodecuenta_id', $this->tipodecuenta_id );
		$criteria->compare ( 'numcuenta', $this->numcuenta, true );
		$criteria->compare ( 'cbu', $this->cbu, true );
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
		return CHtml::listData ( Iva::model ()->findAll (), "id", "descripcion", "porcentaje" );
	}
	public function getMenuTiposDeCuentas() {
		return CHtml::listData ( Tipodecuenta::model ()->findAll (), "id", "descripcion" );
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
