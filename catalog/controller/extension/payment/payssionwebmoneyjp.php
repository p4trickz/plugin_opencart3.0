<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerExtensionPaymentPayssionWebMoneyJP extends ControllerExtensionPaymentPayssion {
	protected $pm_id = 'webmoney_jp';
}