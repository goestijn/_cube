<?php

namespace Cube\Flash;

use \ErrorException;

class Message 
{

	protected $_message;
	protected $_title;
	protected $_type;


	public function __construct($message, $title, $type)
	{

		$this->_message = $message;
		$this->_title = $title;
		$this->_type = $type;

	}


	public function __get($property)
	{

		$property = sprintf('_%s', $property);

		if (!property_exists($this, $property))
			throw new ErrorException(sprintf('Undefined property: %s::$%s', __CLASS__, ltrim($property, '_')));

		return $this->{$property};

	}


	public function __set($property, $value)
	{

		$property = sprintf('_%s', $property);

		if (!property_exists($this, $property))
			throw new ErrorException(sprintf('Undefined property: %s::$%s', __CLASS__, ltrim($property, '_')));

		$this->{$property} = $value;

	}

}