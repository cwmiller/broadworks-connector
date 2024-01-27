<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXMobileTerminationGetResponse
 *
 * Response to the SystemHPBXMobileTerminationGetRequest.
 *         Contains the hPBX mobile termination related configuration parameters.
 *
 * @see SystemHPBXMobileTerminationGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11499","type":"sequence"}]
 */
class SystemHPBXMobileTerminationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routingPrefix
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11499
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $routingPrefix = null;

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

