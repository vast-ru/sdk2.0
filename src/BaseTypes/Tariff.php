<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

class Tariff extends Base
{
    /**
     * Дата и время планируемой передачи заказа (дата и время в формате ISO 8601: YYYY-MM-DDThh:mm:ss±hhmm)
     * @Type("string")
     *
     * @var string
     */
    public $date;

    /**
     * Тип заказа (1 - "интернет-магазин", 2 - "доставка")
     * @Type("int")
     *
     * @var int
     */
    public $type;

    /**
     * Валюта, в которой необходимо произвести расчет
     * @Type("int")
     *
     * @var int
     */
    public $currency;

    /**
     * Код тарифа
     * @Type("int")
     *
     * @var int
     */
    public $tariff_code;

    /**
     * Адрес отправления
     * @Type("CdekSDK2\BaseTypes\Location")
     *
     * @var Location
     */
    public $from_location;

    /**
     * Адрес получения
     * @Type("CdekSDK2\BaseTypes\Location")
     *
     * @var Location
     */
    public $to_location;

    /**
     * Дополнительные услуги
     * @Type("array<CdekSDK2\BaseTypes\Services>")
     *
     * @var Services[]
     */
    public $services;

    /**
     * Список информации по местам (упаковкам)
     * @Type("array<CdekSDK2\BaseTypes\Package>")
     *
     * @var Package[]
     */
    public $packages;

    /**
     * Tariff constructor.
     *
     * @param array $param
     */
    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'date' => 'date:Y-m-d\TH:i:sO',
            'from_location' => [
                'required',
                function ($value) {
                    if ($value instanceof Location) {
                        return $value->validate();
                    }
                }
            ],
            'to_location' => [
                'required',
                function ($value) {
                    if ($value instanceof Location) {
                        return $value->validate();
                    }
                }
            ],
            'packages' => [
                'required',
                'array',
                function ($value) {
                    if (!is_array($value) || empty($value) || count($value) < 1) {
                        return false;
                    }
                    $i = 0;
                    foreach ($value as $item) {
                        if ($item instanceof Package) {
                            $i += (int)$item->validate();
                        }
                    }
                    return ($i === count($value));
                }
            ],
        ];
    }
}
