<?php

/**
 * This is the model class for table "remitoventa".
 *
 * The followings are the available columns in table 'remitoventa':
 * @property integer $id
 * @property integer $pedidodeventa_id
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Facturaventa[] $facturaventas
 * @property Pedidodeventa $pedidodeventa
 */
class Remitoventa extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'remitoventa';
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
						'pedidodeventa_id',
						'required' 
				),
				array (
						'pedidodeventa_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'creadopor, modificadopor',
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
						'id, pedidodeventa_id, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
						'remitoventa_id' 
				),
				'pedidodeventa' => array (
						self::BELONGS_TO,
						'Pedidodeventa',
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
				'pedidodeventa_id' => 'Pedido de venta',
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
		$criteria->compare ( 'pedidodeventa_id', $this->pedidodeventa_id );
		$criteria->compare ( 'fechacreacion', $this->fechacreacion, true );
		$criteria->compare ( 'fechamodificacion', $this->fechamodificacion, true );
		$criteria->compare ( 'creadopor', $this->creadopor, true );
		$criteria->compare ( 'modificadopor', $this->modificadopor, true );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Remitoventa the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
