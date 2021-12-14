<?php

if (!defined('MODULE_FW_PDF_DOCUMENTS_STATUS') || MODULE_FW_PDF_DOCUMENTS_STATUS != 'true') {
    return;
}

$fwOrderId = $_GET['oID'];
?>

<div style="margin-left: 5px; margin-bottom: 5px; max-width: 1000px; border: 1px solid #aaaaaa; padding: 5px">
    <div class="heading">PDF Dokumente (First-Web)</div>

    <form action="fw_pdf_documents.php?ref=orderEdit&orderId=<?= $fwOrderId ?>" method="post">
        <input type="hidden" name="action" value="mailInvoice">
        <input type="submit" class="button" value="PDF Rechnung per E-Mail versenden">
    </form>

    <form action="fw_pdf_documents.php?ref=orderEdit&orderId=<?= $fwOrderId ?>" method="post">
        <input type="hidden" name="action" value="downloadInvoice">
        <input type="submit" class="button" value="PDF Rechnung herunterladen">
    </form>
</div>
