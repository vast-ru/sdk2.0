<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use CdekSDK2\BaseTypes\Services;
use JMS\Serializer\Annotation\Type;

class Tariff
{
    /**
     * Стоимость доставки
     * @Type("float")
     *
     * @var float
     */
    public $delivery_sum;

    /**
     * Минимальное время доставки (в рабочих днях)
     * @Type("int")
     *
     * @var int
     */
    public $period_min;

    /**
     * Максимальное время доставки (в рабочих днях)
     * @Type("int")
     *
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
     * @Type("array<CdekSDK2\BaseTypes\Services>")
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

    /**
     * Список ошибок
     * @Type("array<CdekSDK2\Dto\Error>")
     *
     * @var Error[]
     */
    public $errors;
}
