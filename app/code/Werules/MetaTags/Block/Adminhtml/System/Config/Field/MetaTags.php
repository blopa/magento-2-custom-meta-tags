<?php

namespace Werules\MetaTags\Block\Adminhtml\System\Config\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\View\Element\BlockInterface;

class MetaTags extends AbstractFieldArray
{
    /**
     * Prepare to render the dynamic rows
     */
    protected function _prepareToRender()
    {
        // Add "name" column
        $this->addColumn('meta_name', [
            'label' => __('Meta Name'),
            'style' => 'width:200px',
        ]);

        // Add "content" column
        $this->addColumn('meta_content', [
            'label' => __('Meta Content'),
            'style' => 'width:400px',
        ]);

        // The "Add" button label
        $this->_addButtonLabel = __('Add Meta Tag');
    }

    /**
     * Prepare each row. This method sets a row ID for array key references.
     *
     * @param BlockInterface $row
     * @throws \Exception
     */
    protected function _prepareArrayRow(\Magento\Framework\DataObject $row)
    {
        parent::_prepareArrayRow($row);
    }
}
