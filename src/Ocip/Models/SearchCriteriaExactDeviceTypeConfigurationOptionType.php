<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceTypeConfigurationOptionType
 *
 * Criteria for searching for a particular fully specified DeviceTypeConfigurationOptionType.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:939","type":"sequence"}]
 */
class SearchCriteriaExactDeviceTypeConfigurationOptionType extends SearchCriteria
{

    /**
     * @ElementName deviceConfigOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     * @Group f0ada2681ca347fa83b464734259b304:939
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    private $deviceConfigOptions = null;

    /**
     * Getter for deviceConfigOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     */
    public function getDeviceConfigOptions()
    {
        return $this->deviceConfigOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceConfigOptions;
    }

    /**
     * Setter for deviceConfigOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceConfigOptions
     * @return $this
     */
    public function setDeviceConfigOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceConfigOptions)
    {
        $this->deviceConfigOptions = $deviceConfigOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceConfigOptions()
    {
        $this->deviceConfigOptions = null;
        return $this;
    }


}

