<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommonPhoneListGetListResponse
 *
 * Response to the GroupCommonPhoneListGetListRequest.
 *         The response contains the group's common phone list.
 *
 * @see GroupCommonPhoneListGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2582","type":"sequence"}]
 */
class GroupCommonPhoneListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2582
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

