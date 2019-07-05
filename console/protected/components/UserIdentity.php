<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    
    private $_id;
    private $nivel;
    private $cedula;
    private $paralelo;
   // private $sucursal;
    /**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
	        $user=Users::model()->find("LOWER(username)=?",array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(($this->password)!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
                    {
                    yii::app()->user->id;
                    $this->setState('nivel', $user->nivel);
                    $this->setState('cedula', $user->cedula);
                    $this->setState('paralelo', $user->paralelo);
                    //$this->setState('sucursal', $user->sucursal);
                    
                    yii::app()->user->getState("nivel");
                    yii::app()->user->getState("cedula");                     
                    yii::app()->user->getState("paralelo");
                    //yii::app()->user->getState("sucursal");
                    
                    $this->_id=$user->id;
                    $this->cedula=$user->cedula;
                    $this->paralelo=$user->paralelo;
                    //$this->paralelo=$user->sucursal;
                    $this->errorCode=self::ERROR_NONE;
                    $cedula=yii::app()->user->getState("cedula");
		
                    
                    
                    }
		return !$this->errorCode;
	}
}