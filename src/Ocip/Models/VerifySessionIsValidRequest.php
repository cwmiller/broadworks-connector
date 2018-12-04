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
 * @Groups [{"id":"d83be92ebac098705e715f24f025a9a9:628","type":"sequence"}]
 */
class VerifySessionIsValidRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

