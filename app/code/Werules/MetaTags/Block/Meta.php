<?php

namespace Werules\MetaTags\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

class Meta extends Template
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Constructor
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context, $data);
    }

    /**
     * Check if meta tag feature is enabled
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            'werules_metatags/general/enabled',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get dynamic meta tags array from config
     * Returns an array of [ ['meta_name' => 'xx', 'meta_content' => 'yy'], ... ]
     */
    public function getDynamicMetaTags()
    {
        $jsonValue = $this->scopeConfig->getValue(
            'werules_metatags/general/dynamic_metatags',
            ScopeInterface::SCOPE_STORE
        );

        if (!$jsonValue) {
            return [];
        }

        // The system stores them as a JSON-encoded array, so decode them.
        $array = json_decode($jsonValue, true);
        if (!is_array($array)) {
            return [];
        }
        return $array;
    }
}
