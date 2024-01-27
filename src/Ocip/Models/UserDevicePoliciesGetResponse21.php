<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesGetResponse21
 *
 * Response to UserDevicePoliciesGetRequest21. enableDeviceFeatureSynchronization and 
 *           enableCallDecline are ignored by the application server in Multiple User Shared mode.
 *         The following element is only used in AS data mode:
 *           lineMode, value “Single User Private and Shared” is returned in XS data mode
 *         The following elements are only used in AS data mode:
 *           enableDeviceFeatureSynchronization, value “false” is returned in XS data mode
 *           enableDnd, value “false” is returned in XS data mode
 *           enableCallForwardingAlways, value “false” is returned in XS data mode
 *           enableCallForwardingBusy, value “false” is returned in XS data mode
 *           enableCallForwardingNoAnswer, value “false” is returned in XS data mode
 *           enableAcd, value “false” is returned in XS data mode
 *           enableExecutive, value “false” is returned in XS data mode
 *           enableExecutiveAssistant, value “false” is returned in XS data mode
 *           enableSecurityClassification, value “false” is returned in XS data mode
 *           enableCallRecording, value “false” is returned in XS data mode
 *
 * @see UserDevicePoliciesGetRequest21
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1613","type":"sequence"}]
 */
class UserDevicePoliciesGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName lineMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode|null
     */
    protected $lineMode = null;

    /**
     * @ElementName enableDeviceFeatureSynchronization
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableDeviceFeatureSynchronization = null;

    /**
     * @ElementName enableDnd
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableDnd = null;

    /**
     * @ElementName enableCallForwardingAlways
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableCallForwardingAlways = null;

    /**
     * @ElementName enableCallForwardingBusy
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableCallForwardingBusy = null;

    /**
     * @ElementName enableCallForwardingNoAnswer
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableCallForwardingNoAnswer = null;

    /**
     * @ElementName enableAcd
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableAcd = null;

    /**
     * @ElementName enableExecutive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableExecutive = null;

    /**
     * @ElementName enableExecutiveAssistant
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableExecutiveAssistant = null;

    /**
     * @ElementName enableSecurityClassification
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableSecurityClassification = null;

    /**
     * @ElementName enableCallRecording
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableCallRecording = null;

    /**
     * @ElementName enableCallDecline
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1613
     * @var bool|null
     */
    protected $enableCallDecline = null;

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

    /**
     * Getter for enableDnd
     *
     * @return bool
     */
    public function getEnableDnd()
    {
        return $this->enableDnd instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDnd;
    }

    /**
     * Setter for enableDnd
     *
     * @param bool $enableDnd
     * @return $this
     */
    public function setEnableDnd($enableDnd)
    {
        $this->enableDnd = $enableDnd;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDnd()
    {
        $this->enableDnd = null;
        return $this;
    }

    /**
     * Getter for enableCallForwardingAlways
     *
     * @return bool
     */
    public function getEnableCallForwardingAlways()
    {
        return $this->enableCallForwardingAlways instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallForwardingAlways;
    }

    /**
     * Setter for enableCallForwardingAlways
     *
     * @param bool $enableCallForwardingAlways
     * @return $this
     */
    public function setEnableCallForwardingAlways($enableCallForwardingAlways)
    {
        $this->enableCallForwardingAlways = $enableCallForwardingAlways;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallForwardingAlways()
    {
        $this->enableCallForwardingAlways = null;
        return $this;
    }

    /**
     * Getter for enableCallForwardingBusy
     *
     * @return bool
     */
    public function getEnableCallForwardingBusy()
    {
        return $this->enableCallForwardingBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallForwardingBusy;
    }

    /**
     * Setter for enableCallForwardingBusy
     *
     * @param bool $enableCallForwardingBusy
     * @return $this
     */
    public function setEnableCallForwardingBusy($enableCallForwardingBusy)
    {
        $this->enableCallForwardingBusy = $enableCallForwardingBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallForwardingBusy()
    {
        $this->enableCallForwardingBusy = null;
        return $this;
    }

    /**
     * Getter for enableCallForwardingNoAnswer
     *
     * @return bool
     */
    public function getEnableCallForwardingNoAnswer()
    {
        return $this->enableCallForwardingNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallForwardingNoAnswer;
    }

    /**
     * Setter for enableCallForwardingNoAnswer
     *
     * @param bool $enableCallForwardingNoAnswer
     * @return $this
     */
    public function setEnableCallForwardingNoAnswer($enableCallForwardingNoAnswer)
    {
        $this->enableCallForwardingNoAnswer = $enableCallForwardingNoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallForwardingNoAnswer()
    {
        $this->enableCallForwardingNoAnswer = null;
        return $this;
    }

    /**
     * Getter for enableAcd
     *
     * @return bool
     */
    public function getEnableAcd()
    {
        return $this->enableAcd instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAcd;
    }

    /**
     * Setter for enableAcd
     *
     * @param bool $enableAcd
     * @return $this
     */
    public function setEnableAcd($enableAcd)
    {
        $this->enableAcd = $enableAcd;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAcd()
    {
        $this->enableAcd = null;
        return $this;
    }

    /**
     * Getter for enableExecutive
     *
     * @return bool
     */
    public function getEnableExecutive()
    {
        return $this->enableExecutive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableExecutive;
    }

    /**
     * Setter for enableExecutive
     *
     * @param bool $enableExecutive
     * @return $this
     */
    public function setEnableExecutive($enableExecutive)
    {
        $this->enableExecutive = $enableExecutive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableExecutive()
    {
        $this->enableExecutive = null;
        return $this;
    }

    /**
     * Getter for enableExecutiveAssistant
     *
     * @return bool
     */
    public function getEnableExecutiveAssistant()
    {
        return $this->enableExecutiveAssistant instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableExecutiveAssistant;
    }

    /**
     * Setter for enableExecutiveAssistant
     *
     * @param bool $enableExecutiveAssistant
     * @return $this
     */
    public function setEnableExecutiveAssistant($enableExecutiveAssistant)
    {
        $this->enableExecutiveAssistant = $enableExecutiveAssistant;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableExecutiveAssistant()
    {
        $this->enableExecutiveAssistant = null;
        return $this;
    }

    /**
     * Getter for enableSecurityClassification
     *
     * @return bool
     */
    public function getEnableSecurityClassification()
    {
        return $this->enableSecurityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSecurityClassification;
    }

    /**
     * Setter for enableSecurityClassification
     *
     * @param bool $enableSecurityClassification
     * @return $this
     */
    public function setEnableSecurityClassification($enableSecurityClassification)
    {
        $this->enableSecurityClassification = $enableSecurityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSecurityClassification()
    {
        $this->enableSecurityClassification = null;
        return $this;
    }

    /**
     * Getter for enableCallRecording
     *
     * @return bool
     */
    public function getEnableCallRecording()
    {
        return $this->enableCallRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallRecording;
    }

    /**
     * Setter for enableCallRecording
     *
     * @param bool $enableCallRecording
     * @return $this
     */
    public function setEnableCallRecording($enableCallRecording)
    {
        $this->enableCallRecording = $enableCallRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallRecording()
    {
        $this->enableCallRecording = null;
        return $this;
    }

    /**
     * Getter for enableCallDecline
     *
     * @return bool
     */
    public function getEnableCallDecline()
    {
        return $this->enableCallDecline instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallDecline;
    }

    /**
     * Setter for enableCallDecline
     *
     * @param bool $enableCallDecline
     * @return $this
     */
    public function setEnableCallDecline($enableCallDecline)
    {
        $this->enableCallDecline = $enableCallDecline;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallDecline()
    {
        $this->enableCallDecline = null;
        return $this;
    }
}

