<?php

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class fw_pdf_documents extends StdModule
{
    public function __construct()
    {
        $this->init('MODULE_FW_PDF_DOCUMENTS');

        $this->addKey('BILL_CUSTOMER_NUMBER_FORMAT');
        $this->addKey('BILL_BILL_NUMBER_FORMAT');
        $this->addKey('BILL_ORDER_NUMBER_FORMAT');
        $this->addKey('BILL_SHOW_DIFF_DELIVERY_ADRESS');
        $this->addKey('BILL_SHOW_ORDER_ID_ON_BILL');
        $this->addKey('BILL_SHOW_CUSTOMER_NUMBER');
        $this->addKey('BILL_SHOW_DOCUMENT_ID');
        $this->addKey('BILL_SHOW_PRODUCT_MODLE');
        $this->addKey('BILL_SHOW_MANUFACTURER_PRODUCT_MODLE');
        $this->addKey('BILL_SHOW_PRODUCT_ATTRIBUTE_MODLE');
        $this->addKey('BILL_SHOW_DOCUMENT_PAGES');
        $this->addKey('BILL_SHOW_ORDER_ID_AS_CODE128');
        $this->addKey('BILL_SHOW_AMAZON_ORDER_ID_AS_CODE128');
        $this->addKey('BILL_SHOW_ORDER_COMMENTS_SHOP');
        $this->addKey('BILL_SHOW_ORDER_COMMENTS_PAYPAL');
        $this->addKey('BILL_SHOW_GROUPED_VAT_TOTALS');
        $this->addKey('BILL_CUSTOMER_GROUP_IDS_IN_EU');
        $this->addKey('BILL_CUSTOMER_GROUP_IDS_OUTSIDE_EU');
    }

    public function display()
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

        $this->addConfiguration('BILL_CUSTOMER_NUMBER_FORMAT', '', 6, 1);
        $this->addConfiguration('BILL_BILL_NUMBER_FORMAT', '', 6, 1);
        $this->addConfiguration('BILL_ORDER_NUMBER_FORMAT', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_DIFF_DELIVERY_ADRESS', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_ORDER_ID_ON_BILL', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_CUSTOMER_NUMBER', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_DOCUMENT_ID', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_PRODUCT_MODLE', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_MANUFACTURER_PRODUCT_MODLE', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_PRODUCT_ATTRIBUTE_MODLE', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_DOCUMENT_PAGES', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_ORDER_ID_AS_CODE128', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_AMAZON_ORDER_ID_AS_CODE128', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_ORDER_COMMENTS_SHOP', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_ORDER_COMMENTS_PAYPAL', '', 6, 1);
        $this->addConfiguration('BILL_SHOW_GROUPED_VAT_TOTALS', '', 6, 1);
        $this->addConfiguration('BILL_CUSTOMER_GROUP_IDS_IN_EU', '', 6, 1);
        $this->addConfiguration('BILL_CUSTOMER_GROUP_IDS_OUTSIDE_EU', '', 6, 1);
    }

    public function remove()
    {
        parent::remove();

        $this->deleteConfiguration('BILL_CUSTOMER_NUMBER_FORMAT');
        $this->deleteConfiguration('BILL_BILL_NUMBER_FORMAT');
        $this->deleteConfiguration('BILL_ORDER_NUMBER_FORMAT');
        $this->deleteConfiguration('BILL_SHOW_DIFF_DELIVERY_ADRESS');
        $this->deleteConfiguration('BILL_SHOW_ORDER_ID_ON_BILL');
        $this->deleteConfiguration('BILL_SHOW_CUSTOMER_NUMBER');
        $this->deleteConfiguration('BILL_SHOW_DOCUMENT_ID');
        $this->deleteConfiguration('BILL_SHOW_PRODUCT_MODLE');
        $this->deleteConfiguration('BILL_SHOW_MANUFACTURER_PRODUCT_MODLE');
        $this->deleteConfiguration('BILL_SHOW_PRODUCT_ATTRIBUTE_MODLE');
        $this->deleteConfiguration('BILL_SHOW_DOCUMENT_PAGES');
        $this->deleteConfiguration('BILL_SHOW_ORDER_ID_AS_CODE128');
        $this->deleteConfiguration('BILL_SHOW_AMAZON_ORDER_ID_AS_CODE128');
        $this->deleteConfiguration('BILL_SHOW_ORDER_COMMENTS_SHOP');
        $this->deleteConfiguration('BILL_SHOW_ORDER_COMMENTS_PAYPAL');
        $this->deleteConfiguration('BILL_SHOW_GROUPED_VAT_TOTALS');
        $this->deleteConfiguration('BILL_CUSTOMER_GROUP_IDS_IN_EU');
        $this->deleteConfiguration('BILL_CUSTOMER_GROUP_IDS_OUTSIDE_EU');
    }
}
