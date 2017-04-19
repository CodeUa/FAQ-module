<?php

class Plumrocket_Faq_Model_Resource_Faq extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('plumrocket_faq/table_news', 'news_id');
    }

}