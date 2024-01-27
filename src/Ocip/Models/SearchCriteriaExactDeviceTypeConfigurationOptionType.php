<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceTypeConfigurationOptionType
 *
 * Criteria for searching for a particular fully specified DeviceTypeConfigurationOptionType.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:973","type":"sequence"}]
 */
class SearchCriteriaExactDeviceTypeConfigurationOptionType extends SearchCriteria
{
    /**
     * @ElementName deviceConfigOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     * @Group 972fbf832439609ec8f2765c5637c3f1:973
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    protected $deviceConfigOptions = null;

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

