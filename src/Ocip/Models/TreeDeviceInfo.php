<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TreeDeviceInfo
 *
 * Information related to a tree device.
 *         A tree device is a device associated with a device type that has the option 
 *         supportLinks set to "Support Links from Devices".  Many leaf devices can link to it.
 *         When a tree device is created, it is assigned a system-wide unique linkId.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4788","type":"sequence"}]
 */
class TreeDeviceInfo
{

    /**
     * @ElementName treeDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4788
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey|null
     */
    protected $treeDeviceKey = null;

    /**
     * @ElementName linkId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4788
     * @var string|null
     */
    protected $linkId = null;

    /**
     * Getter for treeDeviceKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     */
    public function getTreeDeviceKey()
    {
        return $this->treeDeviceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treeDeviceKey;
    }

    /**
     * Setter for treeDeviceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey $treeDeviceKey
     * @return $this
     */
    public function setTreeDeviceKey(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey $treeDeviceKey)
    {
        $this->treeDeviceKey = $treeDeviceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreeDeviceKey()
    {
        $this->treeDeviceKey = null;
        return $this;
    }

    /**
     * Getter for linkId
     *
     * @return string
     */
    public function getLinkId()
    {
        return $this->linkId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linkId;
    }

    /**
     * Setter for linkId
     *
     * @param string $linkId
     * @return $this
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinkId()
    {
        $this->linkId = null;
        return $this;
    }


}

