<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListGetListResponse
 *
 * Response to the UserPersonalPhoneListGetListRequest.
 *         The response contains a user's personal phone list.
 *
 * @see UserPersonalPhoneListGetListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2813","type":"sequence"}]
 */
class UserPersonalPhoneListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2813
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    private $entry = array(
        
    );

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

