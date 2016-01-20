<?php

/**
 * This is the model class for table "pedidodeventa".
 *
 * The followings are the available columns in table 'pedidodeventa':
 * @property integer $id
 * @property integer $cliente_id
 * @property integer $pago_id
 * @property integer $detallepedidoventa_id
 * @property string $descuento
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Facturaventa[] $facturaventas
 * @property Cliente $cliente
 * @property Detallepedidoventa $detallepedidoventa
 * @property Pago $pago
 * @property Remitoventa[] $remitoventas
 */
class Pedidodeventa extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'pedidodeventa';
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
						'cliente_id, pago_id, detallepedidoventa_id',
						'required' 
				),
				array (
						'cliente_id, pago_id, detallepedidoventa_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'descuento, creadopor, modificadopor',
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
						'id, cliente_id, pago_id, detallepedidoventa_id, descuento, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
				'facturaventas' => array (
						self::HAS_MANY,
						'Facturaventa',
						'pedidodeventa_id' 
				),
				'cliente' => array (
						self::BELONGS_TO,
						'Cliente',
						'cliente_id' 
				),
				'detallepedidoventa' => array (
						self::BELONGS_TO,
						'Detallepedidoventa',
						'detallepedidoventa_id' 
				),
				'pago' => array (
						self::BELONGS_TO,
						'Pago',
						'pago_id' 
				),
				'remitoventas' => array (
						self::HAS_MANY,
						'Remitoventa',
						'pedidodeventa_id' 
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
				'cliente_id' => 'Cliente',
				'pago_id' => 'Pago',
				'detallepedidoventa_id' => 'Detalle pedido',
				'descuento' => 'Descuento',
				'fechacreacion' => 'Fecha de creacion',
				'fechamodificacion' => 'Fecha de modificacion',
				'creadopor' => 'Creado por',
				'modificadopor' => 'Modificado por' 
		);
	}
	public function getMenuClientes() {
		return CHtml::listData ( Cliente::model ()->findAll (), "id", "razonsocial" );
	}
	public function getMenuPagos() {
		return CHtml::listData ( Pago::model ()->findAll (), "id", "descripcion" );
	}
	/*
	 * public function getMenuDetallePedidosVenta()
	 * {
	 * return CHtml::listData(Detallepedidoventa::model()->findAll(),"id","cantidad");
	 * }
	 */
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
		$criteria->compare ( 'cliente_id', $this->cliente_id );
		$criteria->compare ( 'pago_id', $this->pago_id );
		$criteria->compare ( 'detallepedidoventa_id', $this->detallepedidoventa_id );
		$criteria->compare ( 'descuento', $this->descuento, true );
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
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Pedidodeventa the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
