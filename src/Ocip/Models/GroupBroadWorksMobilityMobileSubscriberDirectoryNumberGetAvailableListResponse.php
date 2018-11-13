<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
 *
 * Response to
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest.
 *         Contains a list of available Mobile Subscriber Directory Numbers not yet
 * assigned to any user.
 *
 * @see
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest
 */
class GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileSubscriberDirectoryNumber
     * @Type string
     * @Array
     * @var string[]
     */
    private $mobileSubscriberDirectoryNumber = array(
        
    );

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

