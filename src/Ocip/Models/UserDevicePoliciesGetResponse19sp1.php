<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesGetResponse19sp1
 *
 * Response to UserDevicePoliciesGetRequest19sp1.
 * enableDeviceFeatureSynchronization is ignored by the application server in
 * Multiple User Shared mode.
 */
class UserDevicePoliciesGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName enableDnd
     * @var bool|null
     */
    private $enableDnd = null;

    /**
     * @ElementName enableCallForwardingAlways
     * @var bool|null
     */
    private $enableCallForwardingAlways = null;

    /**
     * @ElementName enableCallForwardingBusy
     * @var bool|null
     */
    private $enableCallForwardingBusy = null;

    /**
     * @ElementName enableCallForwardingNoAnswer
     * @var bool|null
     */
    private $enableCallForwardingNoAnswer = null;

    /**
     * @ElementName enableAcd
     * @var bool|null
     */
    private $enableAcd = null;

    /**
     * @ElementName enableExecutive
     * @var bool|null
     */
    private $enableExecutive = null;

    /**
     * @ElementName enableExecutiveAssistant
     * @var bool|null
     */
    private $enableExecutiveAssistant = null;

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

    /**
     * Getter for enableDnd
     *
     * @ElementName enableDnd
     * @return bool|null
     */
    public function getEnableDnd()
    {
        return $this->enableDnd;
    }

    /**
     * Setter for enableDnd
     *
     * @ElementName enableDnd
     * @param bool|null $enableDnd
     * @return $this
     */
    public function setEnableDnd($enableDnd)
    {
        $this->enableDnd = $enableDnd;
        return $this;
    }

    /**
     * Getter for enableCallForwardingAlways
     *
     * @ElementName enableCallForwardingAlways
     * @return bool|null
     */
    public function getEnableCallForwardingAlways()
    {
        return $this->enableCallForwardingAlways;
    }

    /**
     * Setter for enableCallForwardingAlways
     *
     * @ElementName enableCallForwardingAlways
     * @param bool|null $enableCallForwardingAlways
     * @return $this
     */
    public function setEnableCallForwardingAlways($enableCallForwardingAlways)
    {
        $this->enableCallForwardingAlways = $enableCallForwardingAlways;
        return $this;
    }

    /**
     * Getter for enableCallForwardingBusy
     *
     * @ElementName enableCallForwardingBusy
     * @return bool|null
     */
    public function getEnableCallForwardingBusy()
    {
        return $this->enableCallForwardingBusy;
    }

    /**
     * Setter for enableCallForwardingBusy
     *
     * @ElementName enableCallForwardingBusy
     * @param bool|null $enableCallForwardingBusy
     * @return $this
     */
    public function setEnableCallForwardingBusy($enableCallForwardingBusy)
    {
        $this->enableCallForwardingBusy = $enableCallForwardingBusy;
        return $this;
    }

    /**
     * Getter for enableCallForwardingNoAnswer
     *
     * @ElementName enableCallForwardingNoAnswer
     * @return bool|null
     */
    public function getEnableCallForwardingNoAnswer()
    {
        return $this->enableCallForwardingNoAnswer;
    }

    /**
     * Setter for enableCallForwardingNoAnswer
     *
     * @ElementName enableCallForwardingNoAnswer
     * @param bool|null $enableCallForwardingNoAnswer
     * @return $this
     */
    public function setEnableCallForwardingNoAnswer($enableCallForwardingNoAnswer)
    {
        $this->enableCallForwardingNoAnswer = $enableCallForwardingNoAnswer;
        return $this;
    }

    /**
     * Getter for enableAcd
     *
     * @ElementName enableAcd
     * @return bool|null
     */
    public function getEnableAcd()
    {
        return $this->enableAcd;
    }

    /**
     * Setter for enableAcd
     *
     * @ElementName enableAcd
     * @param bool|null $enableAcd
     * @return $this
     */
    public function setEnableAcd($enableAcd)
    {
        $this->enableAcd = $enableAcd;
        return $this;
    }

    /**
     * Getter for enableExecutive
     *
     * @ElementName enableExecutive
     * @return bool|null
     */
    public function getEnableExecutive()
    {
        return $this->enableExecutive;
    }

    /**
     * Setter for enableExecutive
     *
     * @ElementName enableExecutive
     * @param bool|null $enableExecutive
     * @return $this
     */
    public function setEnableExecutive($enableExecutive)
    {
        $this->enableExecutive = $enableExecutive;
        return $this;
    }

    /**
     * Getter for enableExecutiveAssistant
     *
     * @ElementName enableExecutiveAssistant
     * @return bool|null
     */
    public function getEnableExecutiveAssistant()
    {
        return $this->enableExecutiveAssistant;
    }

    /**
     * Setter for enableExecutiveAssistant
     *
     * @ElementName enableExecutiveAssistant
     * @param bool|null $enableExecutiveAssistant
     * @return $this
     */
    public function setEnableExecutiveAssistant($enableExecutiveAssistant)
    {
        $this->enableExecutiveAssistant = $enableExecutiveAssistant;
        return $this;
    }


}

