<?php

namespace Modules\Weather\Block;

class WeatherBlock extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context) {
        parent::__construct($context);
    }

    public function getText() {
        return "Hello World";
    }

}
