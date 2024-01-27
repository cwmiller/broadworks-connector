<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList
 *
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:170","type":"sequence"}]
 */
class GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList
{
    /**
     * @ElementName homeZoneIpAddressRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     * @Group 993492ea5726d0f3ec8743f5cef40e23:170
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null
     */
    protected $homeZoneIpAddressRange = null;

    /**
     * @ElementName newHomeZoneIpAddressRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     * @Group 993492ea5726d0f3ec8743f5cef40e23:170
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null
     */
    protected $newHomeZoneIpAddressRange = null;

    /**
     * Getter for homeZoneIpAddressRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     */
    public function getHomeZoneIpAddressRange()
    {
        return $this->homeZoneIpAddressRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneIpAddressRange;
    }

    /**
     * Setter for homeZoneIpAddressRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $homeZoneIpAddressRange
     * @return $this
     */
    public function setHomeZoneIpAddressRange(\CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $homeZoneIpAddressRange)
    {
        $this->homeZoneIpAddressRange = $homeZoneIpAddressRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneIpAddressRange()
    {
        $this->homeZoneIpAddressRange = null;
        return $this;
    }

    /**
     * Getter for newHomeZoneIpAddressRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     */
    public function getNewHomeZoneIpAddressRange()
    {
        return $this->newHomeZoneIpAddressRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newHomeZoneIpAddressRange;
    }

    /**
     * Setter for newHomeZoneIpAddressRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $newHomeZoneIpAddressRange
     * @return $this
     */
    public function setNewHomeZoneIpAddressRange(\CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $newHomeZoneIpAddressRange)
    {
        $this->newHomeZoneIpAddressRange = $newHomeZoneIpAddressRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewHomeZoneIpAddressRange()
    {
        $this->newHomeZoneIpAddressRange = null;
        return $this;
    }
}

