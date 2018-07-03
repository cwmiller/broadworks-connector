<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileNetworkGetRequest
 *
 * Get a Mobile Network.
 *         The response is either SystemBroadWorksMobilityMobileNetworkGetResponse
 * or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityMobileNetworkGetResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityMobileNetworkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

