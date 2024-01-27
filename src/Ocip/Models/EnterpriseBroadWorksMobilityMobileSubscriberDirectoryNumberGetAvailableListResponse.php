<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest.
 *         Contains a list of available Mobile Subscriber Directory Numbers not yet assigned to any user.
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2089","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableMobileSubscriberDirectoryNumber
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2089
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $availableMobileSubscriberDirectoryNumber = [
        
    ];

    /**
     * Getter for availableMobileSubscriberDirectoryNumber
     *
     * @return string[]
     */
    public function getAvailableMobileSubscriberDirectoryNumber()
    {
        return $this->availableMobileSubscriberDirectoryNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableMobileSubscriberDirectoryNumber;
    }

    /**
     * Setter for availableMobileSubscriberDirectoryNumber
     *
     * @param string[] $availableMobileSubscriberDirectoryNumber
     * @return $this
     */
    public function setAvailableMobileSubscriberDirectoryNumber(array $availableMobileSubscriberDirectoryNumber)
    {
        $this->availableMobileSubscriberDirectoryNumber = $availableMobileSubscriberDirectoryNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableMobileSubscriberDirectoryNumber()
    {
        $this->availableMobileSubscriberDirectoryNumber = null;
        return $this;
    }

    /**
     * Adder for availableMobileSubscriberDirectoryNumber
     *
     * @param string $availableMobileSubscriberDirectoryNumber
     * @return $this
     */
    public function addAvailableMobileSubscriberDirectoryNumber(string $availableMobileSubscriberDirectoryNumber)
    {
        $this->availableMobileSubscriberDirectoryNumber[] = $availableMobileSubscriberDirectoryNumber;
        return $this;
    }
}

