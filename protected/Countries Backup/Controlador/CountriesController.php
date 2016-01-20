<?php
class CountriesController extends Controller {
	public function actionIndex() // accion con combre de la accion comenzando en mayuscula
{
		// -----------------------------------------------------------------------------------------------------------------------------
		// Si el usuario esta logueado haces algo SERIA ASI
		// if(Yii::app()->user->isGuest)
		// {
		
		// }
		// Si el usuario NO esta logueado haces algo SERIA ASI
		// if(Yii::app()->user->isGuest)
		// {
		
		// }
		// -----------------------------------------------------------------------------------------------------------------------------
		// Mensajes de session
		// Yii::app()->user->serFlash("error","My mesanje");
		// Yii::app()->user->getFlash("error"); //te trae tu mensaje osea My mensaje
		// Yii::app()->user->getFlashes("error"); //devuelve el array de todos los mensajes de session
		
		// acceder al id del usuario y almacenarlo en una base de datos, POR EJEMPLO QUIEN CAMBIO TAL REGISTRO, QUIEN CREO TAL OTRO REGISTRO
		// Yii::app()->user->id;
		// Yii::app()->user->name;
		
		// crear nuestros propios campos o para el uso de array de session
		// Yii::app()->user->setState("apellidos","perez ..");
		// Yii::app()->user->setState("MyvarSession","xyz"); //crear una variable
		// Yii::app()->user->getState("MyvarSession"); //y accederla cuando queramos
		// si quieres preguntar por una variable de session lo haces de esta manera
		// Yii::app()->user->hasState("MyvarSession"); //devuelve un booleano y ahi haces o no lo qye debas hacer
		// -----------------------------------------------------------------------------------------------------------------------------
		// PARA LOGUEAR Y DESLOGUAR A UNA PERSONA
		// Yii::app()->user->login(UserIdentity,360*24); //primer parametro es una instancia de CUserIdentity, y el segundo es el tiempo que dura la session abierta (VALOR ENTERO EN SEGUNDOS)
		// Yii::app()->user->logout(); //desloguea a la persona que esta logueada
		
		// -----------------------------------------------------------------------------------------------------------------------------
		
		// if(Yii::app()->request->isAjaxRequest)
		// {
		// json
		// }
		// if(Yii::app()->request->isPostRequest)
		// {}
		// $test=Yii::app()->request->getPost("test","defualValue"); //Devolveria el valor de la variable $_POST["test"]
		// $test=Yii::app()->request->getQuery("test","defualValue"); //Devolveria el valor de la variable $_GET["test"]
		// $test=Yii::app()->request->getParam("test","defualValue"); //Devolveria el valor de la variable $_POST["test"] $_GET["test"]
		
		// (isset($_POST["Countries"]) //LO MISMO QUE ACCEDERLO ASI
		
		// echo Yii::app()->request->baseUrl."<br>"; //Acceder a una ruta
		// ----------------------------------------------------------------------------------------------------------------------------------
		// Yii::app()->request->sendFile(); EXPORTACION A EXCELL
		// Redireccionar en cualquier logar de la aplicacion
		// Yii::app()->request->redirect("http://") O ("/site/index") REDIRECCIONAR A UNA URL ()
		
		// ESTE REDIRECT SE USA EN EL CONTROLADOR, ES LO QUE MAS SE UDA
		// $this->redirect(array("/site/index","id"=>2));
		// ----------------------------------------------------------------------------------------------------------------------------------
		
		// IMPLEMENTACION DE FORMA DIRECTA LOS MENSAJES DE SESSION
		// Yii::app()->user->setFlash("error","Este es un mensaje de error 1");
		// Yii::app()->user->setFlash("success","Este es un mensaje de error 2");
		// Yii::app()->user->setFlash("info","Este es un mensaje de error 3");
		/*
		 * $model=new Countries(); //sobre el modelo, inicializo el modelo
		 * $model->name="Colombia"; //nueva instancia con el valor Colombia
		 * $model->status=1; //ESTO PARA UN COMBO
		 * $model->save(); //despues de setiar todos los parametros invoco el metodo GUARDAR. de esta manera se inserta un nuevo registro en la base de datos
		 */
		// con esta sentencia accedemos a todos los datos de la tabla countries
		
		// authManager
		// CREO UN ROL ADMINISTRADOR
		// Yii::app()->authManager->createRole("admin");
		// Yii::app()->authManager->assign("admin",3); //le vas a dar el permiso al usuario numero 3
		echo Yii::app ()->user->id;
		if (Yii::app ()->authManager->checkAccess ( "admin", Yii::app ()->user->id )) // acceso directo a authManager
			echo "Hola desde authmanager<br>";
		
		if (Yii::app ()->user->checkAccess ( "admin" ))
			echo "Hola desde user";
		
		if (isset ( $_GET ["excel"] )) {
			$model = Countries::model ()->findAll (); // variable que contiene todos los registros de la base de datos de Countries
			$content = $this->renderPartial ( "excel", array (
					"model" => $model 
			), true ); // VARIABLE QUE TIENE EL ARRAY DEL MODELO, PODRIA HACER UNA CONSULTA, ACA ESTOY CONSULTANDO LA BASE DE DATOS
			Yii::app ()->request->sendFile ( "myExcel.xls", $content ); // EXPORTACION A EXCELL .> primer parametro "nombre del archivo" lo sedundo es el contenido (variable de la linea de arriba)
		}
		
		$countries = Countries::model ()->findAll (); // CONSULTAMOS LA TABLA, creamos la variable countries, accedemos a la clase modelo Countries CON EL METODO ESTATICO QUE CREAMOS Y QUE ES UN modelo que crea yii en su genenador de codigo, y hacemos
		                                          // findALL(); con esto accedemos a todos los registros que esten en la tabla countries
		$this->render ( "index", array (
				"countries" => $countries 
		) ); // lo enviamos a la vista llamada "index", (en feneral el mismo nombre del controlador, osea Index del actionIndex)
			                                                       // y le envio parametros, osea la variable $countries que tiene la vista, y luego el resultado de la consulta $couentries
	}
	public function actionCreate() {
		// var_dump($_POST); //metodo post
		
		// Yii::app()->end(); //de esta manera se cierra en YII, EQUIVALENTE A UN EXIT DE OTRO LENGUAJE, (cerrar de manera adecuada)
		$model = new Countries (); // creamos el modelo,inicializo countries, lo instancias
		if (isset ( $_POST ["Countries"] )) {
			$model->attributes = $_POST ["Countries"]; // array clave valor con los parametros de ese modelo
			                                        
			// $model->name=$_POST["Countries"]["name"]; //para NO hacer esto 1 x 1 de los campos, con la linea $model->atributes=$_POST["Countries"]
			                                        // $model->status=$_POST["Countries"]["status"]; //lo hará dinamicamente
			
			if ($model->save ()) {
				// yes save
				// mensaje success QUE SE GUARDO BIEN EL CAMPO EN LA BASE DE DATOS
				Yii::app ()->user->setFlash ( "success", "EL Countries fue guardado correctamente =)." );
				$this->redirect ( array (
						"index" 
				) ); // array("site/index")
			}
		}
		$this->render ( "create", array (
				"model" => $model 
		) ); // lo mandas a la vista, mandas la variable model y el valor es model
	}
	public function actionUpdate($id) // id que se usa por parametro
{
		$model = Countries::model ()->findByPk ( $id ); // esta vez no necesitas instaciarlo desde cero, con el =new del create de arriba porque solo vas a actualizar un registro
		                                          // consulto el pais que viene con id, metodo de activeRecord por el cual puedo consultar un registro por su clave primaria
		                                          // simplemente le mando el valor del id
		if (isset ( $_POST ["Countries"] )) // pregunto si vienen datos pos POST, el formulario se llama Countries
{
			$model->attributes = $_POST ["Countries"]; // setiamos todos los parametros con la propiedad atributes
			if ($model->save ()) // AQUI ACTUALIZAS EL REGISTRO DE LA BASE DE DATOS, para actualizar se usa el mismo metodo SAVE, como ya tiene una instancia del registro actualiza
			                   // arriba cuando le das el new, crea la instancia vacía por eso lo inserta
			{
				Yii::app ()->user->setFlash ( "success", "EL Countries fue ACTUALIZADO =)." ); // mensaje de session
				$this->redirect ( array (
						"index" 
				) ); // redireccionas a index, como estas en el mismo controlador, te lleva al index de Counties,
					                                 // SI QUEREMOS DIRECCIONAR A OTRO LE DAS LA DIRECCION ABSOLUTA redirect(array("loquesea/index"));
			} else
				Yii::app ()->user->setFlash ( "error", "No se actualizó =(." ); // esto no haria falta porque cuando no guarda los campos se ponen en rojo
		}
		$this->render ( "update", array (
				"model" => $model 
		) ); // renderizas la vista, QUEDAN LOS DATOS EN LA VISTA PERO NO GUARDA, ES PARA QUE EL USUARIO NO VUELVA A CARGAR
	}
	public function actionDelete($id) {
		$model = Countries::model ()->deleteByPk ( $id ); // voy a consultar ese registro en la base de datos, ByPk (primari Key)
		$this->redirect ( array (
				"index" 
		) ); // renderizo vistas, redirect que redirecciona a vistas
	}
	public function actionView($id) // accion view que recibe como parametro el id
{
		$model = Countries::model ()->findByPk ( $id ); // voy a hacer una consulta, para hacer la consulta con findByPk y le paso el id de la consulta que me viene por url
		$this->render ( "view", array (
				"model" => $model 
		) ); // renderizo view y le mando una variable llamada model que va a tener el contenido de model, que es la instancia de mi ActiveRecord del modelo Countries
	}
	public function actionEnabled($id) // accion enabled disabled
{
		$model = Countries::model ()->findByPk ( $id ); // creamos el modelo igual que siempre le pasamos el id
		if ($model->status == 1) // si es igual a 1 que lo cambie a 0
			$model->status = 0;
		else
			$model->status = 1; // sino que lo cambie a 1
		$model->save (); // guarda los cambios
		$this->redirect ( array (
				"index" 
		) ); // renderizo a la vista que vos queres en este caso el mismo index
	}
} 
