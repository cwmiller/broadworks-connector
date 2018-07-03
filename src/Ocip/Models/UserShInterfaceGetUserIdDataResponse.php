<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataResponse
 *
 * Response to the UserShInterfaceGetUserIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified
 * userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 *         
 *         Replaced by: UserShInterfaceGetUserIdDataResponse21sp1 in AS data mode.
 *
 * @see UserShInterfaceGetUserIdDataRequest
 * @see UserShInterfaceGetUserIdDataResponse21sp1
 */
class UserShInterfaceGetUserIdDataResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry[] $entry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}

