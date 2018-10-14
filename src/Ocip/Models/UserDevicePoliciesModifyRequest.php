<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDevicePoliciesModifyRequest
 *
 * Modify the user level data associated with Device Policy.
 * enableDeviceFeatureSynchronization and enableCallDecline can be 
 *           configured by the admin regardless of lineMode, but is ignored by the
 * application server in Multiple User Shared mode. 
 *           
 *           enableCallDecline can be modified by the user when the admin has set
 * the mode to ‘Single User Private and Shared Lines mode’. 
 *           This is the only element that the user can modify. In XS data mode, 
 * the lineMode is ignored and enabledCallDecline is the only element that can be
 * configured.
 *           
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
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
 */
class UserDevicePoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName lineMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode|null
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
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for lineMode
     *
     * @ElementName lineMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode|null
     */
    public function getLineMode()
    {
        return $this->lineMode;
    }

    /**
     * Setter for lineMode
     *
     * @ElementName lineMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode|null $lineMode
     * @return $this
     */
    public function setLineMode(\CWM\BroadWorksConnector\Ocip\Models\UserDevicePolicyLineMode $lineMode)
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

