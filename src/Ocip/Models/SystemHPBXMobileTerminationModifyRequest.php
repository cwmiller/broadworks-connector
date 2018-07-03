<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXMobileTerminationModifyRequest
 *
 * Request to modify the hPBX mobile termination related configuration parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemHPBXMobileTerminationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routingPrefix
     * @var string|null
     */
    private $routingPrefix = null;

    /**
     * Getter for routingPrefix
     *
     * @ElementName routingPrefix
     * @return string|null
     */
    public function getRoutingPrefix()
    {
        return $this->routingPrefix;
    }

    /**
     * Setter for routingPrefix
     *
     * @ElementName routingPrefix
     * @param string|null $routingPrefix
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        $this->routingPrefix = $routingPrefix;
        return $this;
    }


}

