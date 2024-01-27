<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetUserIdDataResponse21sp1
 *
 * Response to the UserShInterfaceGetUserIdDataRequest21sp1.
 *         The response contains the Sh non-transparent data for the specified userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 *         The value Mobility in Endpoint Type is only applicable in AS data mode.
 *
 * @see UserShInterfaceGetUserIdDataRequest21sp1
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4020","type":"sequence"}]
 */
class UserShInterfaceGetUserIdDataResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4020
     * @var \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1[]
     */
    protected $entry = [
        
    ];

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1[]
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1[] $entry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ShInterfaceUserIdDataEntry21sp1 $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry[] = $entry;
        return $this;
    }
}

