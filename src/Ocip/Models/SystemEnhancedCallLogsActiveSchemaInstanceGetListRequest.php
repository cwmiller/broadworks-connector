<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsActiveSchemaInstanceGetListRequest
 *
 * Request the system level database schema instances defined for Enhanced Call Logs. 
 *       For each instance, the number of actual users (users that have the Enhanced Call Logs service,
 *       are assigned to that schema instance and have recorded call logs on the NDS) are given. 
 *       The response is either a SystemEnhancedCallLogsActiveSchemaInstanceGetListResponse or an ErrorResponse.
 *
 * @see SystemEnhancedCallLogsActiveSchemaInstanceGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f6b3702edb5f67fa12c2c426d98657db:207","type":"sequence"}]
 */
class SystemEnhancedCallLogsActiveSchemaInstanceGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

