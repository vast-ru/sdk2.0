<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use CdekSDK2\BaseTypes\Services;
use JMS\Serializer\Annotation\Type;

class TariffFull
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

    /**
     * Расчетный вес (в граммах)
     * @Type("int")
     *
     * @var int
     */
    public $weight_calc;

    /**
     * Дополнительные услуги
     * @Type("CdekSDK2\BaseTypes\Services")
     *
     * @var Services[]
     */
    public $services;

    /**
     * Стоимость доставки с учетом дополнительных услуг
     * @Type("float")
     *
     * @var float
     */
    public $total_sum;

    /**
     * Валюта, в которой рассчитана стоимость доставки (код СДЭК)
     * @Type("string")
     *
     * @var string
     */
    public $currency;
}
