<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesGetResponse
 *
 * Response to UserDevicePoliciesGetRequest. enableDeviceFeatureSynchronization is ignored by the application server in Multiple User Shared mode.
 *
 * @see UserDevicePoliciesGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:42261","type":"sequence"}]
 */
class UserDevicePoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lineMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42261
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode|null
     */
    private $lineMode = null;

    /**
     * @ElementName enableDeviceFeatureSynchronization
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42261
     * @var bool|null
     */
    private $enableDeviceFeatureSynchronization = null;

    /**
     * Getter for lineMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode
     */
    public function getLineMode()
    {
        return $this->lineMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lineMode;
    }

    /**
     * Setter for lineMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode $lineMode
     * @return $this
     */
    public function setLineMode(\CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode $lineMode)
    {
        $this->lineMode = $lineMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLineMode()
    {
        $this->lineMode = null;
        return $this;
    }

    /**
     * Getter for enableDeviceFeatureSynchronization
     *
     * @return bool
     */
    public function getEnableDeviceFeatureSynchronization()
    {
        return $this->enableDeviceFeatureSynchronization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDeviceFeatureSynchronization;
    }

    /**
     * Setter for enableDeviceFeatureSynchronization
     *
     * @param bool $enableDeviceFeatureSynchronization
     * @return $this
     */
    public function setEnableDeviceFeatureSynchronization($enableDeviceFeatureSynchronization)
    {
        $this->enableDeviceFeatureSynchronization = $enableDeviceFeatureSynchronization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDeviceFeatureSynchronization()
    {
        $this->enableDeviceFeatureSynchronization = null;
        return $this;
    }


}

