<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutboundProxyCacheParametersGetRequest
 *
 * Request to get the list of Outbound Proxy Cache system parameters.
 *         The response is either SystemOutboundProxyCacheParametersGetResponse or ErrorResponse.
 *         
 *         Note that an error is returned if CloudPBX is not licensed.
 *
 * @see SystemOutboundProxyCacheParametersGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14227","type":"sequence"}]
 */
class SystemOutboundProxyCacheParametersGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
}

