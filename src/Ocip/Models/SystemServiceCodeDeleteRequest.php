<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeDeleteRequest
 *
 * Request to delete a service code for the purpose of providing free format
 * routable strings for dialing
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceCode
     * @var string|null
     */
    private $serviceCode = null;

    /**
     * Getter for serviceCode
     *
     * @ElementName serviceCode
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Setter for serviceCode
     *
     * @ElementName serviceCode
     * @param string|null $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }


}

