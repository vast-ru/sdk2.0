<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;

/**
 * Class Delivery
 * @package CdekSDK2\BaseTypes
 */
class Delivery extends Base
{
    /**
     * Номер заказа СДЭК
     * @Type("string")
     * @var string
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
     * Время доставки С, согласованное с получателем (формат H:i)
     * @Type("string")
     * @var string
     */
    public $time_from;

    /**
     * Время доставки ПО, согласованное с получателем (формат H:i)
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
     * Новый код ПВЗ СДЭК, на который будет доставлена посылка (если требуется изменить)
     * @SkipWhenEmpty()
     * @Type("string")
     * @var string
     */
    public $delivery_point;

    /**
     * Новый адрес доставки (если требуется изменить)
     * @Type("CdekSDK2\BaseTypes\Location")
     * @var Location
     */
    public $to_location;

    /**
     * Delivery constructor.
     * @param array $param
     */
    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'cdek_number' => 'required_without:order_uuid|string',
            'order_uuid' => 'required_without:cdek_number|string',
            'date' => 'required|date',
            'to_location' => [
                function ($value) {
                    if ($value instanceof Location) {
                        return $value->validate();
                    }
                }
            ],
        ];
    }
}