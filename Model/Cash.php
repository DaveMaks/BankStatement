<?php


namespace BankStatement\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash
{
    const IN = 0;
    const OUT = 1;

    /**
     * Дата транзакции
     */
    var int $Time;
    /** Сумма транзакции*/
    var float $Summ;
    /** Направление Транзакции 0-входящие 1- исходящие*/
    var int|null $Direction = null;
    /** сырые данные*/
    var $Raw;
}
