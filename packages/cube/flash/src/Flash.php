<?php

namespace Cube\Flash;

use Illuminate\Session\Store;

class Flash 
{

	protected $_messages;
	protected $_session;


	public function __construct(Store $session)
	{
		$this->_messages = collect();
		$this->_session = $session;
	}


	public function danger($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}


	public function info($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}


	public function success($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}


	public function warning($message, $title = null)
	{
		$this->message($message, $title, __FUNCTION__);
	}


	public function message($message, $title = null, $type = 'default')
	{

		$message = new Message($message, $title, $type);
		
		$this->_messages->push($message);
		$this->_session->flash('flash', $this->_messages);

	}

}