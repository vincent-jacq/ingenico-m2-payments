<?php

namespace Ingenico\Payment\Model\Email;

class Template extends \Magento\Email\Model\Template
{
    public function getLogoUrlCustom($store): string
    {
        return parent::getLogoUrl($store);
    }
}
