<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetAvailableLeafDeviceListResponse22
 *
 * Response to SystemGetAvailableLeafDeviceListRequest22.
 *
 * @see SystemGetAvailableLeafDeviceListRequest22
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10776","type":"sequence"}]
 */
class SystemGetAvailableLeafDeviceListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName leafDeviceKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10776
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    protected $leafDeviceKey = [
        
    ];

    /**
     * @ElementName supportLinks
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SupportLinks22V2
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10776
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

