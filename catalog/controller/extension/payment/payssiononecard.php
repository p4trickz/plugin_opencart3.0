<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerExtensionPaymentPayssionOnecard extends ControllerExtensionPaymentPayssion {
	protected $pm_id = 'onecard';
}