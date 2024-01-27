<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneGetListResponse
 *
 * Response to the SystemZoneGetListRequest.
 *
 * @see SystemZoneGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20010","type":"sequence"}]
 */
class SystemZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20010
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $zoneName = [
        
    ];

    /**
     * Getter for zoneName
     *
     * @return string[]
     */
    public function getZoneName()
    {
        return $this->zoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @param string[] $zoneName
     * @return $this
     */
    public function setZoneName(array $zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZoneName()
    {
        $this->zoneName = null;
        return $this;
    }

    /**
     * Adder for zoneName
     *
     * @param string $zoneName
     * @return $this
     */
    public function addZoneName(string $zoneName)
    {
        $this->zoneName[] = $zoneName;
        return $this;
    }
}

