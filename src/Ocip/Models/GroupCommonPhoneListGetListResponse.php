<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommonPhoneListGetListResponse
 *
 * Response to the GroupCommonPhoneListGetListRequest.
 *         The response contains the group's common phone list.
 */
class GroupCommonPhoneListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[] $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}
