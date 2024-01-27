<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21
 *
 * Adds Mobile Subscriber Directory Numbers to a service provider-mobile network combination. It is possible to add a single DN,
 *         or a list of DNs.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:541","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:541
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mobileNetworkName = null;

    /**
     * @ElementName mobileSubscriberDirectoryNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:541
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $mobileSubscriberDirectoryNumber = [
        
    ];

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
     * Getter for mobileNetworkName
     *
     * @return string
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @param string $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkName()
    {
        $this->mobileNetworkName = null;
        return $this;
    }

    /**
     * Getter for mobileSubscriberDirectoryNumber
     *
     * @return string[]
     */
    public function getMobileSubscriberDirectoryNumber()
    {
        return $this->mobileSubscriberDirectoryNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileSubscriberDirectoryNumber;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumber
     *
     * @param string[] $mobileSubscriberDirectoryNumber
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumber(array $mobileSubscriberDirectoryNumber)
    {
        $this->mobileSubscriberDirectoryNumber = $mobileSubscriberDirectoryNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileSubscriberDirectoryNumber()
    {
        $this->mobileSubscriberDirectoryNumber = null;
        return $this;
    }

    /**
     * Adder for mobileSubscriberDirectoryNumber
     *
     * @param string $mobileSubscriberDirectoryNumber
     * @return $this
     */
    public function addMobileSubscriberDirectoryNumber(string $mobileSubscriberDirectoryNumber)
    {
        $this->mobileSubscriberDirectoryNumber[] = $mobileSubscriberDirectoryNumber;
        return $this;
    }
}

