<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServicePhoneNumberLookupRequest
 *
 * Lookup if the given number is defined in the specified service in the system.
 *         The response is SystemServicePhoneNumberLookupResponse.
 *
 * @see SystemServicePhoneNumberLookupResponse
 */
class SystemServicePhoneNumberLookupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null
     */
    private $serviceType = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for serviceType
     *
     * @ElementName serviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Setter for serviceType
     *
     * @ElementName serviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null $serviceType
     * @return $this
     */
    public function setServiceType(\CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

