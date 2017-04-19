<?php

class Plumrocket_Faq_Block_Faq extends Mage_Core_Block_Template
{

    public function getNewsCollection()
    {
        $newsCollection = Mage::getModel('plumrocket_faq/faq')->getCollection()->addFieldToFilter( 'status', '1' );
        $newsCollection->setOrder('created', 'DESC');
        return $newsCollection;

    }

}
