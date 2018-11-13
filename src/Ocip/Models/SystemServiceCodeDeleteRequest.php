<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeDeleteRequest
 *
 * Request to delete a service code for the purpose of providing free format
 * routable strings for dialing
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemServiceCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceCode
     * @Type string
     * @var string|null
     */
    private $serviceCode = null;

    /**
     * Getter for serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCode;
    }

    /**
     * Setter for serviceCode
     *
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCode()
    {
        $this->serviceCode = null;
        return $this;
    }


}

