<?php

use FirstWeb\PdfDocuments\Classes\Controller;

require 'includes/application_top.php';

if (!defined('MODULE_FW_PDF_DOCUMENTS_STATUS') || MODULE_FW_PDF_DOCUMENTS_STATUS != 'true') {
    return;
}

require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

// restore_error_handler();
// restore_exception_handler();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL ^ E_NOTICE);

$controller = new Controller();
$controller->invoke();
