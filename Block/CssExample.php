<?php

namespace Codilar\SampleCssJs\Block;

use Magento\Framework\View\Element\Template;

class CssExample extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return 'Css Example output';
    }
}
