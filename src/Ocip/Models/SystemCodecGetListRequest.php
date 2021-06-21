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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5510","type":"sequence"}]
 */
class SystemCodecGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

