<?php

class WsMonitorController extends Controller
{

	public function actions()
	{
		return array(
		            'wsdl'=>array(
		                'class'=>'CWebServiceAction',
					'classMap'=>array(
			                    'HeartBeat'=>'HeartBeat',
							),
					),
		);
	}
	
	/**
	* @param string the username
	* @param string the password
	* @return string a token
	* @soap
	*/
	public function login($username, $password)
	{
		
		$record = WsCredential::model()->findByAttributes(array('username'=>$username,
														'password'=>$password));
		
		if (!isset($record))
			throw new SoapFault("login", "Problem with login");
		
		$token = $record->token;
		
		return $token;
	}
	
	/**
	* Save heartBeat in monitor table
	* @param string token
	* @param HeartBeat
	* @return bool success
	* @soap
	*/
	public function setHeartBeat($token, $heartBeat)
	{
		$this->authenticateByToken($token);
		
		try 
		{
			$modelMonitor = new Monitor();
			$modelMonitor->Id_device = $heartBeat->Id_device;
			$modelMonitor->Id_device_state = $heartBeat->Id_device_state;
			$modelMonitor->Id_device_type = $heartBeat->Id_device_type;
			$modelMonitor->description = $heartBeat->description;
			$modelMonitor->save();
		}
		catch (Exception $e) 
		{
			return false;
		}
		return true;
	}
	
	/**
	* Get heartBeat from monitor table
	* @param string token
	* @return HeartBeat[] 
	* @soap
	*/
	public function getHeartBeat($token)
	{
		$this->authenticateByToken($token);
		
		$heartBeatArray = array();
		try
		{
			
			$arrMonitor = Monitor::model()->findAllByAttributes(array('was_sent'=>0));
			foreach($arrMonitor as $monitor)
			{
				$heartBeat = new HeartBeat();
				$heartBeat->setAttributes($monitor);
				$heartBeatArray[] = $heartBeat;
			}			
		}
		catch (Exception $e)
		{
			return $heartBeatArray;
		}
		return $heartBeatArray;
	}

	/**
	* Get heartBeat from monitor table by deviceId
	* @param string token
	* @param string Id_device
	* @return HeartBeat[]
	* @soap
	*/
	public function getHeartBeatByDeviceId($token, $idDevice)
	{
		$this->authenticateByToken($token);
	
		$heartBeatArray = array();
		try
		{
				
			$arrMonitor = Monitor::model()->findAllByAttributes(array('Id_device'=>$idDevice, 'was_sent'=>0));
			foreach($arrMonitor as $monitor)
			{
				$heartBeat = new HeartBeat();
				$heartBeat->setAttributes($monitor);
				$heartBeatArray[] = $heartBeat;
			}
		}
		catch (Exception $e)
		{
			return $heartBeatArray;
		}
		return $heartBeatArray;
	}
	
	/**
	* Set "getHeartBeat" acknowledge
	* @param string token
	* @param HeartBeat[]
	* @return boolean success
	* @soap
	*/
	public function ackHeartBeat($token, $arrHeartBeat)
	{
		$this->authenticateByToken($token);
	
		try {

			foreach($arrHeartBeat as $item)
			{
				$modelMonitor = Monitor::model()->findByAttributes(array(
												'Id_device'=>$item->Id_device,
												'insert_date'=>$item->insert_date,
												'Id_device_type'=>$item->Id_device_type,
												));
				if(isset($modelMonitor))
				{
					$modelMonitor->was_sent = 1;
					$modelMonitor->save();
				}
			}
		} catch (Exception $e) {
			return false;
		}
		
		return true;
	}
	
	/**
	* authenticates a user via the token
	* throws an exception on error
	*/
	protected function authenticateByToken($token)
	{
		$record = WsCredential::model()->findByPk($token);
		
		if (!isset($record))
			throw new SoapFault('authentication', 'Your session is invalid');
	}
}
