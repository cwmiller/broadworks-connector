<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataResponse
 *
 * Response to the UserShInterfaceGetUserIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 *         
 *         Replaced by: UserShInterfaceGetUserIdDataResponse21sp1 in AS data mode.
 *
 * @see UserShInterfaceGetUserIdDataRequest
 * @see UserShInterfaceGetUserIdDataResponse21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18893","type":"sequence"}]
 */
class UserShInterfaceGetUserIdDataResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:18893
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry[]
     */
    protected $entry = [
        
    ];

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry[]
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry[] $entry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }
}

