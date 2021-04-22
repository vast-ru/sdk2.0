<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\BaseTypes\Delivery;
use CdekSDK2\Http\ApiResponse;

/**
 * Class Delivery
 * @package CdekSDK2\Actions
 */
class Deliveries extends Action
{
    /**
     * URL для запросов к API
     * @var string
     */
    public const URL = '/delivery';

    /**
     * Регистрация договоренности о доставке
     * @param Delivery $delivery
     * @return ApiResponse
     * @throws \CdekSDK2\Exceptions\RequestException
     */
    public function add(Delivery $delivery): ApiResponse
    {
        $params = $this->serializer->toArray($delivery);
        return $this->preparedAdd($params);
    }
}