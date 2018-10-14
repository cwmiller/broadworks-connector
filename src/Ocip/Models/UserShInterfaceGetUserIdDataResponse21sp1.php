<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataResponse21sp1
 *
 * Response to the UserShInterfaceGetUserIdDataRequest21sp1.
 *         The response contains the Sh non-transparent data for the specified
 * userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 *         The value Mobility in Endpoint Type is only applicable in AS data mode.
 *
 * @see UserShInterfaceGetUserIdDataRequest21sp1
 */
class UserShInterfaceGetUserIdDataResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1[]
     */
    private $entry = array(
        
    );

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1[] $entry
     * @return $this
     */
    public function setEntry(array $entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1 $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}

