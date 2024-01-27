<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesModifyRequest
 *
 * Modify the user level data associated with Device Policy. enableDeviceFeatureSynchronization and enableCallDecline can be 
 *           configured by the admin regardless of lineMode, but is ignored by the application server in Multiple User Shared mode. 
 *           
 *           enableCallDecline can be modified by the user when the admin has set the mode to ‘Single User Private and Shared Lines mode’. 
 *           This is the only element that the user can modify. In XS data mode,  the lineMode is ignored and enabledCallDecline is the only element that can be configured.
 *           
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           lineMode
 *           enableDeviceFeatureSynchronization
 *           enableDnd
 *           enableCallForwardingAlways
 *           enableCallForwardingBusy
 *           enableCallForwardingNoAnswer
 *           enableAcd
 *           enableExecutive
 *           enableExecutiveAssistant
 *           enableSecurityClassification
 *           enableCallRecording         
 *           
 *           The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1658","type":"sequence"}]
 */
class UserDevicePoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName lineMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode|null
     */
    protected $lineMode = null;

    /**
     * @ElementName enableDeviceFeatureSynchronization
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableDeviceFeatureSynchronization = null;

    /**
     * @ElementName enableDnd
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableDnd = null;

    /**
     * @ElementName enableCallForwardingAlways
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableCallForwardingAlways = null;

    /**
     * @ElementName enableCallForwardingBusy
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableCallForwardingBusy = null;

    /**
     * @ElementName enableCallForwardingNoAnswer
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableCallForwardingNoAnswer = null;

    /**
     * @ElementName enableAcd
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableAcd = null;

    /**
     * @ElementName enableExecutive
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableExecutive = null;

    /**
     * @ElementName enableExecutiveAssistant
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableExecutiveAssistant = null;

    /**
     * @ElementName enableSecurityClassification
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableSecurityClassification = null;

    /**
     * @ElementName enableCallRecording
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableCallRecording = null;

    /**
     * @ElementName enableCallDecline
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1658
     * @var bool|null
     */
    protected $enableCallDecline = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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

