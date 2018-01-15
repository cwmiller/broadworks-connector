<?php

namespace CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequest;

/**
 * HomeZoneIpAddressRangeList
 */
class HomeZoneIpAddressRangeList
{

    /**
     * @ElementName homeZoneIpAddressRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null
     */
    private $homeZoneIpAddressRange = null;

    /**
     * @ElementName newHomeZoneIpAddressRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null
     */
    private $newHomeZoneIpAddressRange = null;

    /**
     * Getter for homeZoneIpAddressRange
     *
     * @ElementName homeZoneIpAddressRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null
     */
    public function getHomeZoneIpAddressRange()
    {
        return $this->homeZoneIpAddressRange;
    }

    /**
     * Setter for homeZoneIpAddressRange
     *
     * @ElementName homeZoneIpAddressRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null $homeZoneIpAddressRange
     * @return $this
     */
    public function setHomeZoneIpAddressRange($homeZoneIpAddressRange)
    {
        $this->homeZoneIpAddressRange = $homeZoneIpAddressRange;
        return $this;
    }

    /**
     * Getter for newHomeZoneIpAddressRange
     *
     * @ElementName newHomeZoneIpAddressRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null
     */
    public function getNewHomeZoneIpAddressRange()
    {
        return $this->newHomeZoneIpAddressRange;
    }

    /**
     * Setter for newHomeZoneIpAddressRange
     *
     * @ElementName newHomeZoneIpAddressRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange|null $newHomeZoneIpAddressRange
     * @return $this
     */
    public function setNewHomeZoneIpAddressRange($newHomeZoneIpAddressRange)
    {
        $this->newHomeZoneIpAddressRange = $newHomeZoneIpAddressRange;
        return $this;
    }


}

