<?php

namespace Ingenico\Payment\Api;

interface ServiceInterface
{
    /**
     * Remove Alias.
     *
     * @api
     * @param string $alias
     * @return void
     */
    public function removeAlias(string $alias): void;
}
