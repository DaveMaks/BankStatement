<?php

namespace BankStatement;

abstract class FileTypeInterface
{
    var $IINBIN;

    function __construct($IINBIN_Company)
    {
        $this->IINBIN = $IINBIN_Company;
    }

    protected function ReadFile(string $path)
    {

    }

}
