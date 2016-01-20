<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tipoproducto_id
 * @property string $preciounitario
 * @property integer $packunidades_id
 * @property string $stockminimo
 * @property string $stockmaximo
 * @property integer $proveedor_id
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Detallepedidocompra[] $detallepedidocompras
 * @property Detallepedidoventa[] $detallepedidoventas
 * @property Packunidades $packunidades
 * @property Proveedor $proveedor
 * @property Tipoproducto $tipoproducto
 * @property Stock[] $stocks
 */
class Producto extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'producto';
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
						'nombre, descripcion, tipoproducto_id, packunidades_id, proveedor_id',
						'required' 
				),
				array (
						'tipoproducto_id, packunidades_id, proveedor_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'nombre, descripcion, preciounitario, stockminimo, stockmaximo, creadopor, modificadopor',
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
						'id, nombre, descripcion, tipoproducto_id, preciounitario, packunidades_id, stockminimo, stockmaximo, proveedor_id, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
				'detallepedidocompras' => array (
						self::HAS_MANY,
						'Detallepedidocompra',
						'producto_id' 
				),
				'detallepedidoventas' => array (
						self::HAS_MANY,
						'Detallepedidoventa',
						'producto_id' 
				),
				'packunidades' => array (
						self::BELONGS_TO,
						'Packunidades',
						'packunidades_id' 
				),
				'proveedor' => array (
						self::BELONGS_TO,
						'Proveedor',
						'proveedor_id' 
				),
				'tipoproducto' => array (
						self::BELONGS_TO,
						'Tipoproducto',
						'tipoproducto_id' 
				),
				'stocks' => array (
						self::HAS_MANY,
						'Stock',
						'producto_id' 
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
				'descripcion' => 'Descripcion',
				'tipoproducto_id' => 'Tipo producto',
				'preciounitario' => 'Precio unitario',
				'packunidades_id' => 'Pack/unidad',
				'stockminimo' => 'Stock minimo',
				'stockmaximo' => 'Stock maximo',
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
		$criteria->compare ( 'descripcion', $this->descripcion, true );
		$criteria->compare ( 'tipoproducto_id', $this->tipoproducto_id );
		$criteria->compare ( 'preciounitario', $this->preciounitario, true );
		$criteria->compare ( 'packunidades_id', $this->packunidades_id );
		$criteria->compare ( 'stockminimo', $this->stockminimo, true );
		$criteria->compare ( 'stockmaximo', $this->stockmaximo, true );
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
	public function getMenuTipoDeProductos() {
		return CHtml::listData ( Tipoproducto::model ()->findAll (), "id", "descripcion" );
	}
	public function getMenuPackDeUnidades() {
		return CHtml::listData ( Packunidades::model ()->findAll (), "id", "unidad", "packunidades" );
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
	 * @return Producto the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
