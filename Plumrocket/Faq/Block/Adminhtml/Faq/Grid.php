<?php

class Plumrocket_Faq_Block_Adminhtml_Faq_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('plumrocket_faq/faq')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }



    protected function _prepareColumns()
    {

        $helper = Mage::helper('plumrocket_faq');

        $this->addColumn('news_id', array(
            'header' => $helper->__('News ID'),
            'index' => 'news_id'
        ));

        $this->addColumn('title', array(
            'header' => $helper->__('Title'),
            'index' => 'title',
            'type' => 'text',
        ));

         $this->addColumn('status',  array(
            'header'=> $helper->__('status'),
           'type' => 'text',
            'index' => 'status',
        ));

        $this->addColumn('created', array(
            'header' => $helper->__('Created'),
            'index' => 'created',
            'type' => 'date',
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array(
                    'id' => $model->getId(),
                ));
    }

     protected function _prepareMassaction()
    {
        $this->setMassactionIdField('news_id');
        $this->getMassactionBlock()->setFormFieldName('faq');

        $this->getMassactionBlock()->addItem('delete', array(
            'label' => $this->__('Delete'),
            'url' => $this->getUrl('*/*/massDelete'),
        ));
        return $this;
    }

}