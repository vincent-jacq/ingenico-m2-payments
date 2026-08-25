<?php

namespace Ingenico\Payment\Model;

class Alias extends \Magento\Framework\Model\AbstractModel
{
    const CACHE_TAG = 'ingenico_payment_alias';

    protected function _construct(): void
    {
        $this->_init(\Ingenico\Payment\Model\ResourceModel\Alias::class);
    }

    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
