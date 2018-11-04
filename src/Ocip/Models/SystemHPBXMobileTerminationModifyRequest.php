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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $routingPrefix = null;

    /**
     * Getter for routingPrefix
     *
     * @ElementName routingPrefix
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRoutingPrefix()
    {
        return $this->routingPrefix;
    }

    /**
     * Setter for routingPrefix
     *
     * @ElementName routingPrefix
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $routingPrefix
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        $this->routingPrefix = $routingPrefix;
        return $this;
    }


}

