<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceType
 *
 * Criteria for searching for a particular fully specified device type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:865","type":"sequence"}]
 */
class SearchCriteriaExactDeviceType extends SearchCriteria
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:865
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }


}

