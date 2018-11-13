<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupShInterfaceGetUserListResponse
 *
 * Response to the GroupShInterfaceGetUserListRequest.
 *         The response contains the Sh Non Transparent data and associated Public
 * User Identity
 *         information for every Public User Identity in the group.
 *         
 *         Replaced by: GroupShInterfaceGetUserListResponse21sp1 in AS data mode.
 *
 * @see GroupShInterfaceGetUserListRequest
 * @see GroupShInterfaceGetUserListResponse21sp1
 */
class GroupShInterfaceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry[]
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry[] $entry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }


}

