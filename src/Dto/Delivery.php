<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use CdekSDK2\BaseTypes\Location;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * Class Delivery
 * @package CdekSDK2\Dto
 */
class Delivery
{
    /**
     * Идентификатор договоренности о дате доставки в Pintex
     * @Type("string")
     * @var string
     */
    public $uuid;

    /**
     * Номер заказа СДЭК
     * @Type("int")
     * @var int
     */
    public $cdek_number;

    /**
     * Идентификатор заказа в ИС СДЭК
     * @Type("string")
     * @var string
     */
    public $order_uuid;

    /**
     * Дата доставки, согласованная с получателем
     * @Type("string")
     * @var string
     */
    public $date;

    /**
     * Время начала ожидания курьера (согласованное с получателем)
     * @Type("string")
     * @var string
     */
    public $time_from;

    /**
     * Время окончания ожидания курьера (согласованное с получателем)
     * @Type("string")
     * @var string
     */
    public $time_to;

    /**
     * Комментарий
     * @Type("string")
     * @var string
     */
    public $comment;

    /**
     * Новый код ПВЗ СДЭК, на который будет доставлена посылка (если требовалось изменить).
     * @SkipWhenEmpty()
     * @Type("string")
     * @var string
     */
    public $delivery_point;

    /**
     * Новый адрес доставки (если требовалось изменить).
     * @Type("CdekSDK2\BaseTypes\Location")
     * @var Location
     */
    public $to_location;

    /**
     * Статус договоренности о доставке
     * @Type("array<CdekSDK2\Dto\Statuses>")
     * @var Statuses[]
     */
    public $statuses;
}