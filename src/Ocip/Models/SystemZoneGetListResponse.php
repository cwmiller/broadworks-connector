<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneGetListResponse
 *
 * Response to the SystemZoneGetListRequest.
 *
 * @see SystemZoneGetListRequest
 */
class SystemZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName zoneName
     * @var string[]
     */
    private $zoneName = array(
        
    );

    /**
     * Getter for zoneName
     *
     * @ElementName zoneName
     * @return string[]
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @ElementName zoneName
     * @param string[] $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * Adder for zoneName
     *
     * @ElementName zoneName
     * @param string $zoneName
     * @return $this
     */
    public function addZoneName($zoneName)
    {
        $this->zoneName []= $zoneName;
        return $this;
    }


}

