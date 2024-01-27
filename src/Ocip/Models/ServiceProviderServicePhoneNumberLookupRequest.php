<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePhoneNumberLookupRequest
 *
 * Lookup if the given number is defined in the specified service in the service provider.
 *         The response is ServiceProviderServicePhoneNumberLookupResponse.
 *
 * @see ServiceProviderServicePhoneNumberLookupResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6670","type":"sequence"}]
 */
class ServiceProviderServicePhoneNumberLookupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6670
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName serviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType
     * @Group e19a9072c2dad499e9f28837da5768db:6670
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null
     */
    protected $serviceType = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6670
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

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

