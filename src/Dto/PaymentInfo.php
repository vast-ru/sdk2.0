<?php
declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class PaymentInfo {


    /**
     * Тип оплаты:
     * CARD - картой
     * CASH - наличными
     * @Type("string")
     * @var string
     */
    public $type;

    /**
     * Сумма в валюте страны получателя
     * @Type("float")
     * @var float
     */
    public $sum;

}