<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\BaseTypes\Tariff;
use CdekSDK2\Exceptions\RequestException;
use CdekSDK2\Http\ApiResponse;

/**
 * Class CalculatorTariff
 *
 * @package CdekSDK2\Actions
 */
class CalculatorTariff extends Action
{
    /**
     * URL для запросов к API
     *
     * @var string
     */
    public const URL = '/calculator/tariff';

    /**
     * Метод используется для расчета стоимости и сроков доставки по коду тарифа.
     *
     * @param Tariff $tariff Объект запроса
     * @return ApiResponse Ответ
     * @throws RequestException
     */
    public function calculate(Tariff $tariff): ApiResponse
    {
        $params = $this->serializer->toArray($tariff);
        return $this->preparedAdd($params);
    }
}
