<?php

namespace Modules\Newspaper\Block;

use Magento\Framework\View\Element\Template;

class NewspaperBlock extends Template
{
    public function getText() {
        return "Hello World";
    }

    public function __construct(\Magento\Framework\View\Element\Template\Context $context) {
        parent::__construct($context);
    }
}
