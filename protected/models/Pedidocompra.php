<?php

/**
 * This is the model class for table "pedidocompra".
 *
 * The followings are the available columns in table 'pedidocompra':
 * @property integer $id
 * @property integer $proveedor_id
 * @property integer $pago_id
 * @property string $fechapedido
 * @property string $fechadeentrega
 * @property string $numerodefactura
 * @property string $numeroremito
 * @property string $iva
 * @property string $subtotal
 * @property string $total
 * @property integer $formadepago_id
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Detallepedidocompra[] $detallepedidocompras
 * @property Formadepago $formadepago
 * @property Pago $pago
 * @property Proveedor $proveedor
 */
class Pedidocompra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedidocompra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proveedor_id, pago_id, fechapedido, fechadeentrega, formadepago_id', 'required'),
			array('proveedor_id, pago_id, formadepago_id', 'numerical', 'integerOnly'=>true),
			array('numerodefactura, numeroremito, iva, subtotal, total, creadopor, modificadopor', 'length', 'max'=>45),
			array('fechacreacion, fechamodificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, proveedor_id, pago_id, fechapedido, fechadeentrega, numerodefactura, numeroremito, iva, subtotal, total, formadepago_id, fechacreacion, fechamodificacion, creadopor, modificadopor', 'safe', 'on'=>'search'),
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
			'detallepedidocompras' => array(self::HAS_MANY, 'Detallepedidocompra', 'pedido_id'),
			'formadepago' => array(self::BELONGS_TO, 'Formadepago', 'formadepago_id'),
			'pago' => array(self::BELONGS_TO, 'Pago', 'pago_id'),
			'proveedor' => array(self::BELONGS_TO, 'Proveedor', 'proveedor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'proveedor_id' => 'Proveedor',
			'pago_id' => 'Pago',
			'fechapedido' => 'Fechapedido',
			'fechadeentrega' => 'Fechadeentrega',
			'numerodefactura' => 'Numerodefactura',
			'numeroremito' => 'Numeroremito',
			'iva' => 'Iva',
			'subtotal' => 'Subtotal',
			'total' => 'Total',
			'formadepago_id' => 'Formadepago',
			'fechacreacion' => 'Fechacreacion',
			'fechamodificacion' => 'Fechamodificacion',
			'creadopor' => 'Creadopor',
			'modificadopor' => 'Modificadopor',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('proveedor_id',$this->proveedor_id);
		$criteria->compare('pago_id',$this->pago_id);
		$criteria->compare('fechapedido',$this->fechapedido,true);
		$criteria->compare('fechadeentrega',$this->fechadeentrega,true);
		$criteria->compare('numerodefactura',$this->numerodefactura,true);
		$criteria->compare('numeroremito',$this->numeroremito,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('subtotal',$this->subtotal,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('formadepago_id',$this->formadepago_id);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('fechamodificacion',$this->fechamodificacion,true);
		$criteria->compare('creadopor',$this->creadopor,true);
		$criteria->compare('modificadopor',$this->modificadopor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getMenuProveedores() {
		return CHtml::listData ( Proveedor::model ()->findAll (), "id", "razonsocial" );
	}
	public function getMenuPagos() {
		return CHtml::listData ( Pago::model ()->findAll (), "id", "descripcion" );
	}
	public function getMenuIva() {
		return CHtml::listData ( Iva::model ()->findAll (), "id", "descripcion", "porcentaje" );
	}
	public function getMenuFormaDePago() {
		return CHtml::listData ( Formadepago::model ()->findAll (), "id", "descripcion" );
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedidocompra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
