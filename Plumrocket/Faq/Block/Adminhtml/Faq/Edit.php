<?php

class Plumrocket_Faq_Block_Adminhtml_Faq_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'plumrocket_faq';
        $this->_controller = 'adminhtml_faq';
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('plumrocket_faq');
        $model = Mage::registry('current_faq');

        if ($model->getId()) {
            return $helper->__("Edit News item '%s'", $this->escapeHtml($model->getTitle()));
        } else {
            return $helper->__("Add Faq item");
        }
    }

}