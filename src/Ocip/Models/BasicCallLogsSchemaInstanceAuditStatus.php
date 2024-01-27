<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BasicCallLogsSchemaInstanceAuditStatus
 *
 * Status of the Basic Call Logs schema instance audit process initiated by 
 *         the SystemBasicCallLogsSchemaInstanceAuditRequest command.
 *
 * @method static BasicCallLogsSchemaInstanceAuditStatus NOT_STARTED()
 * @method static BasicCallLogsSchemaInstanceAuditStatus IN_PROGRESS()
 * @method static BasicCallLogsSchemaInstanceAuditStatus COMPLETED_SUCCESS()
 * @method static BasicCallLogsSchemaInstanceAuditStatus COMPLETED_ERROR()
 * @EnumValueType string
 */
class BasicCallLogsSchemaInstanceAuditStatus extends \MyCLabs\Enum\Enum
{
    public const NOT_STARTED = 'Not Started';

    public const IN_PROGRESS = 'In Progress';

    public const COMPLETED_SUCCESS = 'Completed Success';

    public const COMPLETED_ERROR = 'Completed Error';
}

