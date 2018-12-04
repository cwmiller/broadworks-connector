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
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:4752","type":"sequence"}]
 */
class SystemCodecGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

