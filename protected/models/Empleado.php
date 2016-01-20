<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $tipodoc
 * @property integer $nrodoc
 * @property string $fechanacimiento
 * @property string $cuil
 * @property string $domicilio
 * @property integer $altura
 * @property integer $piso
 * @property string $depto
 * @property string $fechaingreso
 * @property integer $cargo_id
 * @property string $legajo
 * @property string $mail
 * @property string $telfijo
 * @property string $telmovil
 * @property integer $provincia_id
 * @property integer $localidad_id
 * @property string $fechacreacion
 * @property string $fechamodificacion
 * @property string $creadopor
 * @property string $modificadopor
 *
 * The followings are the available model relations:
 * @property Cargo $cargo
 * @property Localidad $localidad
 * @property Provincia $provincia
 */
class Empleado extends CActiveRecord {
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'empleado';
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
						'nombre, apellido, tipodoc, nrodoc, fechanacimiento, cuil, domicilio, fechaingreso, cargo_id, legajo, provincia_id, localidad_id',
						'required' 
				),
				array (
						'nrodoc, altura, piso, cargo_id, provincia_id, localidad_id',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'nombre',
						'length',
						'max' => 43 
				),
				array (
						'apellido, tipodoc, cuil, domicilio, depto, legajo, mail, telfijo, telmovil, creadopor, modificadopor',
						'length',
						'max' => 45 
				),
				array (
						'mail',
						'email' 
				),
				array (
						'fechacreacion, fechamodificacion',
						'safe' 
				),
				// The following rule is used by search().
				// @todo Please remove those attributes that should not be searched.
				array (
						'id, nombre, apellido, tipodoc, nrodoc, fechanacimiento, cuil, domicilio, altura, piso, depto, fechaingreso, cargo_id, legajo, mail, telfijo, telmovil, provincia_id, localidad_id, fechacreacion, fechamodificacion, creadopor, modificadopor',
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
				'cargo' => array (
						self::BELONGS_TO,
						'Cargo',
						'cargo_id' 
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
				'nrodoc' => 'Nro Doc',
				'fechanacimiento' => 'Fecha de nac',
				'cuil' => 'Cuil',
				'domicilio' => 'Domicilio',
				'altura' => 'Altura',
				'piso' => 'Piso',
				'depto' => 'Departamento',
				'fechaingreso' => 'Fecha de ingr',
				'cargo_id' => 'Cargo',
				'legajo' => 'Legajo',
				'mail' => 'Mail',
				'telfijo' => 'Telefono fijo',
				'telmovil' => 'Telefono movil',
				'provincia_id' => 'Provincia',
				'localidad_id' => 'Localidad',
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
		$criteria->compare ( 'nrodoc', $this->nrodoc );
		$criteria->compare ( 'fechanacimiento', $this->fechanacimiento, true );
		$criteria->compare ( 'cuil', $this->cuil, true );
		$criteria->compare ( 'domicilio', $this->domicilio, true );
		$criteria->compare ( 'altura', $this->altura );
		$criteria->compare ( 'piso', $this->piso );
		$criteria->compare ( 'depto', $this->depto, true );
		$criteria->compare ( 'fechaingreso', $this->fechaingreso, true );
		$criteria->compare ( 'cargo_id', $this->cargo_id );
		$criteria->compare ( 'legajo', $this->legajo, true );
		$criteria->compare ( 'mail', $this->mail, true );
		$criteria->compare ( 'telfijo', $this->telfijo, true );
		$criteria->compare ( 'telmovil', $this->telmovil, true );
		$criteria->compare ( 'provincia_id', $this->provincia_id );
		$criteria->compare ( 'localidad_id', $this->localidad_id );
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
	public function getMenuCargos() {
		return CHtml::listData ( Cargo::model ()->findAll (), "id", "descripcion" );
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
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return Empleado the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
}
