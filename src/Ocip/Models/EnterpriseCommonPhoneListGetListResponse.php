<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommonPhoneListGetListResponse
 *
 * Response to the EnterpriseCommonPhoneListGetListRequest.
 *         The response contains the enterprise's common phone list.
 *
 * @see EnterpriseCommonPhoneListGetListRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:136","type":"sequence"}]
 */
class EnterpriseCommonPhoneListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry
     * @Array
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:136
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    protected $entry = [
        
    ];

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[] $entry
     * @return $this
     */
    public function setEntry(array $entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntry()
    {
        $this->entry = null;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }
}

