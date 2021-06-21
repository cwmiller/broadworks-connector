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

    const NOT_STARTED = 'Not Started';

    const IN_PROGRESS = 'In Progress';

    const COMPLETED_SUCCESS = 'Completed Success';

    const COMPLETED_ERROR = 'Completed Error';


}

