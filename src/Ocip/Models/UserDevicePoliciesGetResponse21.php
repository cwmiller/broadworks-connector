<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesGetResponse21
 *
 * Response to UserDevicePoliciesGetRequest21. enableDeviceFeatureSynchronization
 * and 
 *           enableCallDecline are ignored by the application server in Multiple
 * User Shared mode.
 *         The following element is only used in AS data mode:
 *           lineMode, value “Single User Private and Shared” is returned in XS
 * data mode
 *         The following elements are only used in AS data mode:
 *           enableDeviceFeatureSynchronization, value “false” is returned in
 * XS data mode
 *           enableDnd, value “false” is returned in XS data mode
 *           enableCallForwardingAlways, value “false” is returned in XS data
 * mode
 *           enableCallForwardingBusy, value “false” is returned in XS data
 * mode
 *           enableCallForwardingNoAnswer, value “false” is returned in XS data
 * mode
 *           enableAcd, value “false” is returned in XS data mode
 *           enableExecutive, value “false” is returned in XS data mode
 *           enableExecutiveAssistant, value “false” is returned in XS data
 * mode
 *           enableSecurityClassification, value “false” is returned in XS data
 * mode
 *           enableCallRecording, value “false” is returned in XS data mode
 */
class UserDevicePoliciesGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName enableSecurityClassification
     * @var bool|null
     */
    private $enableSecurityClassification = null;

    /**
     * @ElementName enableCallRecording
     * @var bool|null
     */
    private $enableCallRecording = null;

    /**
     * @ElementName enableCallDecline
     * @var bool|null
     */
    private $enableCallDecline = null;

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

    /**
     * Getter for enableSecurityClassification
     *
     * @ElementName enableSecurityClassification
     * @return bool|null
     */
    public function getEnableSecurityClassification()
    {
        return $this->enableSecurityClassification;
    }

    /**
     * Setter for enableSecurityClassification
     *
     * @ElementName enableSecurityClassification
     * @param bool|null $enableSecurityClassification
     * @return $this
     */
    public function setEnableSecurityClassification($enableSecurityClassification)
    {
        $this->enableSecurityClassification = $enableSecurityClassification;
        return $this;
    }

    /**
     * Getter for enableCallRecording
     *
     * @ElementName enableCallRecording
     * @return bool|null
     */
    public function getEnableCallRecording()
    {
        return $this->enableCallRecording;
    }

    /**
     * Setter for enableCallRecording
     *
     * @ElementName enableCallRecording
     * @param bool|null $enableCallRecording
     * @return $this
     */
    public function setEnableCallRecording($enableCallRecording)
    {
        $this->enableCallRecording = $enableCallRecording;
        return $this;
    }

    /**
     * Getter for enableCallDecline
     *
     * @ElementName enableCallDecline
     * @return bool|null
     */
    public function getEnableCallDecline()
    {
        return $this->enableCallDecline;
    }

    /**
     * Setter for enableCallDecline
     *
     * @ElementName enableCallDecline
     * @param bool|null $enableCallDecline
     * @return $this
     */
    public function setEnableCallDecline($enableCallDecline)
    {
        $this->enableCallDecline = $enableCallDecline;
        return $this;
    }


}

