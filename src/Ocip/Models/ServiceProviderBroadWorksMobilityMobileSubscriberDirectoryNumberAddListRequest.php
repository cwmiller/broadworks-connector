<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest
 *
 * Adds Mobile Subscriber Directory Numbers to a service provider. It is possible to add a single DN,
 *         or a list of DNs.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced by ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18067","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:18067
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName mobileSubscriberDirectoryNumber
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:18067
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

