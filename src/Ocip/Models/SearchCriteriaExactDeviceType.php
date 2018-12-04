<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceType
 *
 * Criteria for searching for a particular fully specified device type.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:782","type":"sequence"}]
 */
class SearchCriteriaExactDeviceType extends SearchCriteria
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group d37849f5e289836ccd316323a7a3799a:782
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

