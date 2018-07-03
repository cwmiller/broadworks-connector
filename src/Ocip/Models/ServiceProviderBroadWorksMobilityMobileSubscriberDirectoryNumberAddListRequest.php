<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest
 *
 * Adds Mobile Subscriber Directory Numbers to a service provider. It is possible
 * to add a single DN,
 *         or a list of DNs.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced by
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest21
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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
    public function setMobileSubscriberDirectoryNumber($mobileSubscriberDirectoryNumber)
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
    public function addMobileSubscriberDirectoryNumber($mobileSubscriberDirectoryNumber)
    {
        $this->mobileSubscriberDirectoryNumber []= $mobileSubscriberDirectoryNumber;
        return $this;
    }


}

