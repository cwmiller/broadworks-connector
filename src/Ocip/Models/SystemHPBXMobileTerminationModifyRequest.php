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
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:9730","type":"sequence"}]
 */
class SystemHPBXMobileTerminationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routingPrefix
     * @Type string
     * @Nillable
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:9730
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $routingPrefix = null;

    /**
     * Getter for routingPrefix
     *
     * @return string|null
     */
    public function getRoutingPrefix()
    {
        return $this->routingPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPrefix;
    }

    /**
     * Setter for routingPrefix
     *
     * @param string|null $routingPrefix
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        if ($routingPrefix === null) {
            $this->routingPrefix = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->routingPrefix = $routingPrefix;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingPrefix()
    {
        $this->routingPrefix = null;
        return $this;
    }


}

