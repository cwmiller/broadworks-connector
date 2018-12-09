<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupShInterfaceGetUserListResponse21sp1
 *
 * Response to the GroupShInterfaceGetUserListRequest21sp1.
 *         The response contains the Sh Non Transparent data and associated Public User Identity
 *         information for every Public User Identity in the group.
 *
 * @see GroupShInterfaceGetUserListRequest21sp1
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:6969","type":"sequence"}]
 */
class GroupShInterfaceGetUserListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry21sp1
     * @Array
     * @Optional
     * @Group 15129cd25fa2d5581f4edfd652c24f93:6969
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry21sp1[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry21sp1[]
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry21sp1[] $entry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserListEntry21sp1 $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }


}

