<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXMobileTerminationGetResponse
 *
 * Response to the SystemHPBXMobileTerminationGetRequest.
 *         Contains the hPBX mobile termination related configuration parameters.
 *
 * @see SystemHPBXMobileTerminationGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11375","type":"sequence"}]
 */
class SystemHPBXMobileTerminationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPrefix
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11375
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $routingPrefix = null;

    /**
     * Getter for routingPrefix
     *
     * @return string
     */
    public function getRoutingPrefix()
    {
        return $this->routingPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPrefix;
    }

    /**
     * Setter for routingPrefix
     *
     * @param string $routingPrefix
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        $this->routingPrefix = $routingPrefix;
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

