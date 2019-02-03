<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemShInterfaceRefreshTaskStartRequest
 *
 * Dispatches the system refresh task on the local Application Server node.  At most one instance of the system refresh task may run on an Application Server node at a given point in time.  If the system refresh task is already running when this request is made, an ErrorResponse is returned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15322","type":"sequence"}]
 */
class SystemShInterfaceRefreshTaskStartRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

