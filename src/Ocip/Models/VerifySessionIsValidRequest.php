<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifySessionIsValidRequest
 *
 * Query the provisioning server to verify the session is authorized. Most
 *         applications should not need this command, because the provisioning server
 *         verifies the session is authorized for all commands.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:683","type":"sequence"}]
 */
class VerifySessionIsValidRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

