<?php

/**
 * This is the model class for table "stock".
 *
 * The followings are the available columns in table 'stock':
 * @property integer $id
 * @property string $unidades
 * @property string $preciounidad
 * @property integer $producto_id
 * @property string $stockcol
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Producto $producto
 */
class Stock extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'stock';
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
						'unidades, producto_id',
						'required' 
				),
				array (
						'producto_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'unidades, preciounidad, stockcol, creadopor, modificadopor',
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
						'id, unidades, preciounidad, producto_id, stockcol, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
				'producto' => array (
						self::BELONGS_TO,
						'Producto',
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
				'unidades' => 'Unidades',
				'preciounidad' => 'Precio por unidad',
				'producto_id' => 'Producto',
				'stockcol' => 'Stockcol',
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
		$criteria->compare ( 'unidades', $this->unidades, true );
		$criteria->compare ( 'preciounidad', $this->preciounidad, true );
		$criteria->compare ( 'producto_id', $this->producto_id );
		$criteria->compare ( 'stockcol', $this->stockcol, true );
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
	public function getMenuProductos() {
		return CHtml::listData ( Producto::model ()->findAll (), "id", "nombre" );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Stock the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
