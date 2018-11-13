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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName mobileSubscriberDirectoryNumber
     * @Type string
     * @Array
     * @var string[]
     */
    private $mobileSubscriberDirectoryNumber = array(
        
    );

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

