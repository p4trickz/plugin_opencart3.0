<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerExtensionPaymentPayssionOpenbucks extends ControllerExtensionPaymentPayssion {
	protected $pm_id = 'openbucks';
}