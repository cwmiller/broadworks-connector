<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
 *
 * Response to GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest.
 *         Contains a list of available Mobile Subscriber Directory Numbers not yet assigned to any user.
 *
 * @see GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:432","type":"sequence"}]
 */
class GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mobileSubscriberDirectoryNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:432
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $mobileSubscriberDirectoryNumber = [
        
    ];

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

