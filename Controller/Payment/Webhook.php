<?php

namespace Ingenico\Payment\Controller\Payment;

class Webhook extends \Ingenico\Payment\Controller\Payment\Base
{
    /**
     * @inheritdoc
     * @throws InvalidArgumentException
     */
    public function execute(): \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface|null
    {
        return $this->_connector->webhookListener();
    }
}
