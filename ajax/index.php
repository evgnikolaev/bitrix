<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
\Bitrix\Main\Localization\Loc::loadMessages($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . '/all.php');


use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;

$request = Application::getInstance()->getContext()->getRequest();

if (!function_exists('returnJSONResult')) {
	function returnJSONResult($result)
	{
		global $APPLICATION;
		$APPLICATION->RestartBuffer();
		header('Content-Type: application/json');
		require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php';
		die (json_encode($result));
	}
}
returnJSONResult(['asd'=>'as']);