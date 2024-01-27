<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsSchemaInstanceGetListRequest
 *
 * Request the system level database schema instances defined for Enhanced Call Logs. 
 *       For each instance, the number of actual users (users that have the Enhanced Call Logs service 
 *       and are assigned to that schema instance) and the number of potential users are given 
 *       (users part of a group or service provider using that schema instance). 
 *       The response is either a SystemEnhancedCallLogsSchemaInstanceGetListResponse or an ErrorResponse.
 *
 * @see SystemEnhancedCallLogsSchemaInstanceGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:290","type":"sequence"}]
 */
class SystemEnhancedCallLogsSchemaInstanceGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

