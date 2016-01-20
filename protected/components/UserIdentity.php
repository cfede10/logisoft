<?php

/** * UserIdentity represents the data needed to identity a user. * It contains the authentication method that checks if the provided * data can identity the user. */
class UserIdentity extends CUserIdentity {
	private $_id;
	public function authenticate() {
		$username = strtolower ( $this->username );
		$user = usuario::model ()->find ( 'LOWER(username)=?', array (
				$username 
		) );
		
		if ($user === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if ($this->password != $user->password)
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->_id = $user->id;
			$this->username = $user->username;
			$this->errorCode = self::ERROR_NONE;
			
			// acceder a los perfiles
			// $this->setState("tipousuario",$user->tipousuario_id);
			// Yii::app()->user->tipousuario;
			
			/* Consultamos los datos del usuario por el username ($user->username) */
			$info_usuario = Usuario::model ()->find ( 'LOWER(username)=?', array (
					$user->username 
			) );
			/* En las vistas tendremos disponibles last_login y perfil pueden setear las que requieran */
			// $this->setState('last_login',$info_usuario->last_login);
			// $this->setState('perfil',$info_usuario->perfil);
			
			/*
			 * Actualizamos el last_login del usuario que se esta autenticando ($user->username)
			 * $sql = "update usuario set last_login = now() where username='$user->username'";
			 * $connection = Yii::app() -> db;
			 * $command = $connection -> createCommand($sql);
			 * $command -> execute();
			 */
		}
		
		return $this->errorCode == self::ERROR_NONE;
	}
	public function getId() {
		return $this->_id;
	}
}