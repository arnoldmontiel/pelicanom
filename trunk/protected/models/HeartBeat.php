<?php
class HeartBeat
{
	/**
	* Set model attributes
	* @param Nab $model
	*/
	public function setAttributes($model)
	{
		//set attributes
		$attributesArray = $model->attributes;
		while (($value = current($attributesArray)) !== false) {
			$this->setAttribute(key($attributesArray), $value);
			next($attributesArray);
		}
	}
	
	public function setAttribute($name,$value)
	{
		if(property_exists($this,$name))
			$this->$name=$value;
		else
			return false;
		return true;
	}
	
	/**
	 * @var string Id_device
	 * @soap
	 */
	public $Id_device;

	/**
	 * @var integer Id_device_state
	 * @soap
	 */
	public $Id_device_state;

	/**
	 * @var integer Id_device_type
	 * @soap
	 */
	public $Id_device_type;
	
	/**
	* @var string description
	* @soap
	*/
	public $description;

	/**
	* @var string insert_date
	* @soap
	*/
	public $insert_date;
}