<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceType
 *
 * Criteria for searching for a particular fully specified device type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:958","type":"sequence"}]
 */
class SearchCriteriaExactDeviceType extends SearchCriteria
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:958
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

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

