<?php

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Информация о переносах прозвонов
 *
 * Class RescheduledCalls
 * @package CdekSDK2\BaseTypes
 */
class RescheduledCalls extends Base
{
    /**
     * Дата и время создания переноса прозвона
     * @Type("string")
     * @var string
     */
    public $date_time;

    /**
     * Дата, на которую согласован повторный прозвон
     * @Type("string)
     * @var string
     */
    public $date_next;

    /**
     * Время, на которое согласован повторный прозвон
     * @Type("string)
     * @var string
     */
    public $time_next;

    /**
     * Комментарий к переносу прозвона
     * @Type("string")
     * @var string
     */
    public $comment;
}
