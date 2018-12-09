<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCodecGetListRequest
 *
 * Request to get the ordered list of supported codecs in the system.
 *         The ordered list of codecs is sent to MGCP devices when creating connections.
 *         The response is either a SystemCodecGetListResponse or an ErrorResponse.
 *
 * @see SystemCodecGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:4752","type":"sequence"}]
 */
class SystemCodecGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

