<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerExtensionPaymentPayssionWebcashmy extends ControllerExtensionPaymentPayssion {
	protected $pm_id = 'webcash_my';
}