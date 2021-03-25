<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation as Serializer;

class TariffCodes
{
    /**
     * Доступные тарифы
     * @Serializer\Type("array<CdekSDK2\Dto\TariffShort>")
     * @var TariffShort[]
     */
    public $tariff_codes;
}
