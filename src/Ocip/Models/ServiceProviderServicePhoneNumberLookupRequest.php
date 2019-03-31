<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePhoneNumberLookupRequest
 *
 * Lookup if the given number is defined in the specified service in the service provider.
 *         The response is ServiceProviderServicePhoneNumberLookupResponse.
 *
 * @see ServiceProviderServicePhoneNumberLookupResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5772","type":"sequence"}]
 */
class ServiceProviderServicePhoneNumberLookupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5772
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName serviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5772
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null
     */
    private $serviceType = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5772
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for serviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType
     */
    public function getServiceType()
    {
        return $this->serviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceType;
    }

    /**
     * Setter for serviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType $serviceType
     * @return $this
     */
    public function setServiceType(\CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceType()
    {
        $this->serviceType = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }


}

