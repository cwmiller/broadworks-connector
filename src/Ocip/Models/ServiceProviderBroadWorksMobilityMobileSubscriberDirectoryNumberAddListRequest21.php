<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21
 *
 * Adds Mobile Subscriber Directory Numbers to a service provider-mobile network
 * combination. It is possible to add a single DN,
 *         or a list of DNs.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName mobileNetworkName
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * @ElementName mobileSubscriberDirectoryNumber
     * @var string[]
     */
    private $mobileSubscriberDirectoryNumber = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @return string|null
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @param string|null $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * Getter for mobileSubscriberDirectoryNumber
     *
     * @ElementName mobileSubscriberDirectoryNumber
     * @return string[]
     */
    public function getMobileSubscriberDirectoryNumber()
    {
        return $this->mobileSubscriberDirectoryNumber;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumber
     *
     * @ElementName mobileSubscriberDirectoryNumber
     * @param string[] $mobileSubscriberDirectoryNumber
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumber(array $mobileSubscriberDirectoryNumber)
    {
        $this->mobileSubscriberDirectoryNumber = $mobileSubscriberDirectoryNumber;
        return $this;
    }

    /**
     * Adder for mobileSubscriberDirectoryNumber
     *
     * @ElementName mobileSubscriberDirectoryNumber
     * @param string $mobileSubscriberDirectoryNumber
     * @return $this
     */
    public function addMobileSubscriberDirectoryNumber(string $mobileSubscriberDirectoryNumber)
    {
        $this->mobileSubscriberDirectoryNumber []= $mobileSubscriberDirectoryNumber;
        return $this;
    }


}

