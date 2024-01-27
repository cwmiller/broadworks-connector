<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationLockoutClearAllRequest
 *
 * Request to clear all sip authentication lockouts (both endpoint and trunk group) in the system.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16810","type":"sequence"}]
 */
class SystemSIPAuthenticationLockoutClearAllRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

