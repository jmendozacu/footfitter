<?php
	class Webkul_ChatSystem_Model_Mysql4_Adminstatus_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract	{
		
    	public function _construct()	{
		    parent::_construct();
		    $this->_init("chatsystem/adminstatus");
    	}

	}