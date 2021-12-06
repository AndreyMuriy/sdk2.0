<?php

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Информация о прозвонах получателя
 *
 * Class Calls
 * @package CdekSDK2\BaseTypes
 */
class Calls extends Base
{
    /**
     * Информация о неуспешных прозвонах (недозвонах)
     * @Type("array<CdekSDK2\BaseTypes\FailedCalls>")
     * @var FailedCalls[]
     */
    public $failed_calls;

    /**
     * Информация о переносах прозвонов
     * @Type("array<CdekSDK2\BaseTypes\RescheduledCalls>")
     * @var RescheduledCalls[]
     */
    public $rescheduled_calls;
}