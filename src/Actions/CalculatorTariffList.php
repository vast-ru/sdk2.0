<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\BaseTypes\TariffList;
use CdekSDK2\Exceptions\RequestException;
use CdekSDK2\Http\ApiResponse;

/**
 * Class CalculatorTariffList
 *
 * @package CdekSDK2\Actions
 */
class CalculatorTariffList extends Action
{
    /**
     * URL для запросов к API
     *
     * @var string
     */
    public const URL = '/calculator/tarifflist';

    /**
     * Метод для расчета стоимости и сроков доставки по всем доступным тарифам.
     *
     * @param TariffList $tariffList Объект запроса
     * @return ApiResponse Ответ
     * @throws RequestException
     */
    public function calculate(TariffList $tariffList): ApiResponse
    {
        $params = $this->serializer->toArray($tariffList);
        return $this->preparedAdd($params);
    }
}
