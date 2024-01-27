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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5587","type":"sequence"}]
 */
class SystemCodecGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

