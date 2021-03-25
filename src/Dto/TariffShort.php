<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class TariffShort
{
    /**
     * Код тарифа
     * @Type("int")
     * @var int
     */
    public $tariff_code;

    /**
     * Название тарифа на языке вывода
     * @Type("string")
     * @var string
     */
    public $tariff_name;

    /**
     * Описание тарифа на языке вывода
     * @Type("string")
     * @var string
     */
    public $tariff_description;

    /**
     * Режим тарифа
     * @Type("int")
     * @var int
     */
    public $delivery_mode;

    /**
     * Стоимость доставки
     * @Type("float")
     * @var float
     */
    public $delivery_sum;

    /**
     * Минимальное время доставки (в рабочих днях)
     * @Type("int")
     * @var int
     */
    public $period_min;

    /**
     * Максимальное время доставки (в рабочих днях)
     * @Type("int")
     * @var int
     */
    public $period_max;
}
