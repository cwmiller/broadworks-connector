<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesGetResponse
 *
 * Response to UserDevicePoliciesGetRequest. enableDeviceFeatureSynchronization is
 * ignored by the application server in Multiple User Shared mode.
 */
class UserDevicePoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lineMode
     * @var string|null
     */
    private $lineMode = null;

    /**
     * @ElementName enableDeviceFeatureSynchronization
     * @var bool|null
     */
    private $enableDeviceFeatureSynchronization = null;

    /**
     * Getter for lineMode
     *
     * @ElementName lineMode
     * @return string|null
     */
    public function getLineMode()
    {
        return $this->lineMode;
    }

    /**
     * Setter for lineMode
     *
     * @ElementName lineMode
     * @param string|null $lineMode
     * @return $this
     */
    public function setLineMode($lineMode)
    {
        $this->lineMode = $lineMode;
        return $this;
    }

    /**
     * Getter for enableDeviceFeatureSynchronization
     *
     * @ElementName enableDeviceFeatureSynchronization
     * @return bool|null
     */
    public function getEnableDeviceFeatureSynchronization()
    {
        return $this->enableDeviceFeatureSynchronization;
    }

    /**
     * Setter for enableDeviceFeatureSynchronization
     *
     * @ElementName enableDeviceFeatureSynchronization
     * @param bool|null $enableDeviceFeatureSynchronization
     * @return $this
     */
    public function setEnableDeviceFeatureSynchronization($enableDeviceFeatureSynchronization)
    {
        $this->enableDeviceFeatureSynchronization = $enableDeviceFeatureSynchronization;
        return $this;
    }


}

