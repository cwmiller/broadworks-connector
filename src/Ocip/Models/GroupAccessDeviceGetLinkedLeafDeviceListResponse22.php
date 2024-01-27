<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetLinkedLeafDeviceListResponse22
 *
 * Response to GroupAccessDeviceGetLinkedLeafDeviceListRequest22.
 *
 * @see GroupAccessDeviceGetLinkedLeafDeviceListRequest22
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:893","type":"sequence"}]
 */
class GroupAccessDeviceGetLinkedLeafDeviceListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treeDeviceLinkId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:893
     * @var string|null
     */
    protected $treeDeviceLinkId = null;

    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:893
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    protected $leafDeviceKey = [
        
    ];

    /**
     * @ElementName supportLinks
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:893
     * @var \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2[]
     */
    protected $supportLinks = [
        
    ];

    /**
     * Getter for treeDeviceLinkId
     *
     * @return string
     */
    public function getTreeDeviceLinkId()
    {
        return $this->treeDeviceLinkId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treeDeviceLinkId;
    }

    /**
     * Setter for treeDeviceLinkId
     *
     * @param string $treeDeviceLinkId
     * @return $this
     */
    public function setTreeDeviceLinkId($treeDeviceLinkId)
    {
        $this->treeDeviceLinkId = $treeDeviceLinkId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreeDeviceLinkId()
    {
        $this->treeDeviceLinkId = null;
        return $this;
    }

    /**
     * Getter for leafDeviceKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    public function getLeafDeviceKey()
    {
        return $this->leafDeviceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->leafDeviceKey;
    }

    /**
     * Setter for leafDeviceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[] $leafDeviceKey
     * @return $this
     */
    public function setLeafDeviceKey(array $leafDeviceKey)
    {
        $this->leafDeviceKey = $leafDeviceKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLeafDeviceKey()
    {
        $this->leafDeviceKey = null;
        return $this;
    }

    /**
     * Adder for leafDeviceKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey $leafDeviceKey
     * @return $this
     */
    public function addLeafDeviceKey($leafDeviceKey)
    {
        $this->leafDeviceKey[] = $leafDeviceKey;
        return $this;
    }

    /**
     * Getter for supportLinks
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2[]
     */
    public function getSupportLinks()
    {
        return $this->supportLinks instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportLinks;
    }

    /**
     * Setter for supportLinks
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2[] $supportLinks
     * @return $this
     */
    public function setSupportLinks(array $supportLinks)
    {
        $this->supportLinks = $supportLinks;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportLinks()
    {
        $this->supportLinks = null;
        return $this;
    }

    /**
     * Adder for supportLinks
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2 $supportLinks
     * @return $this
     */
    public function addSupportLinks($supportLinks)
    {
        $this->supportLinks[] = $supportLinks;
        return $this;
    }
}

