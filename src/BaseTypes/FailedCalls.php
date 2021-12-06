<?php

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Информация о неуспешных прозвонах (недозвонах)
 *
 * Class FailedCalls
 * @package CdekSDK2\BaseTypes
 */
class FailedCalls extends Base
{
    /**
     * Дата и время создания недозвона
     * @Type("string")
     * @var string
     */
    public $date_time;

    /**
     * Причина недозвона
     * @Type("int")
     * @var int
     */
    public $reason_code;
}