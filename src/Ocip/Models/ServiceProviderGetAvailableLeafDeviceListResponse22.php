<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetAvailableLeafDeviceListResponse22
 *
 * Response to ServiceProviderGetAvailableLeafDeviceListRequest22.
 *
 * @see ServiceProviderGetAvailableLeafDeviceListRequest22
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4448","type":"sequence"}]
 */
class ServiceProviderGetAvailableLeafDeviceListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4448
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    protected $leafDeviceKey = [
        
    ];

    /**
     * @ElementName supportLinks
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4448
     * @var \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2[]
     */
    protected $supportLinks = [
        
    ];

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

