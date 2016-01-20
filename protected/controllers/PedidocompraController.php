<?php

class PedidoCompraController extends Controller
{
	// Uncomment the following methods and override them if needed
	public function filters() {
		return array (
				'accessControl', // perform access control for CRUD operations
				'postOnly + delete'
		) // we only allow deletion via POST request
		;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new PedidoCompra ();
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if (isset ( $_POST ['PedidoCompra'] )) {
			$model->attributes = $_POST ['PedidoCompra'];
			if ($model->save ())
				$this->redirect ( array (
						'view',
						'id' => $model->id
				) );
		}
	
		$this->render ( 'create', array (
				'model' => $model
		) );
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param integer $id
	 *        	the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this->loadModel ( $id );
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if (isset ( $_POST ['PedidoCompra'] )) {
			$model->attributes = $_POST ['PedidoCompra'];
			if ($model->save ())
				$this->redirect ( array (
						'view',
						'id' => $model->id
				) );
		}
	
		$this->render ( 'update', array (
				'model' => $model
		) );
	}
	
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 *
	 * @param integer $id
	 *        	the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		$this->loadModel ( $id )->delete ();
	
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (! isset ( $_GET ['ajax'] ))
			$this->redirect ( isset ( $_POST ['returnUrl'] ) ? $_POST ['returnUrl'] : array (
					'admin'
			) );
	}
	
	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider ( 'PedidoCompra' );
		$this->render ( 'index', array (
				'dataProvider' => $dataProvider
		) );
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Pedidodeventa ( 'search' );
		$model->unsetAttributes (); // clear any default values
		if (isset ( $_GET ['PedidoCompra'] ))
			$model->attributes = $_GET ['PedidoCompra'];
	
			$this->render ( 'admin', array (
					'model' => $model
			) );
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 *
	 * @param integer $id
	 *        	the ID of the model to be loaded
	 * @return Pedidodeventa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id) {
		$model = Pedidocompra::model ()->findByPk ( $id );
		if ($model === null)
			throw new CHttpException ( 404, 'The requested page does not exist.' );
			return $model;
	}
	
	/**
	 * Performs the AJAX validation.
	 *
	 * @param Pedidodeventa $model
	 *        	the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'pedidocompra-form') {
			echo CActiveForm::validate ( $model );
			Yii::app ()->end ();
		}
	}
	
}