<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanTransferNumbersModifyRequest
 *
 * Modify the transfer numbers for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1713","type":"sequence"}]
 */
class UserOutgoingCallingPlanTransferNumbersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1713
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName useCustomSettings
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1713
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1713
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify|null
     */
    private $userNumbers = null;

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
     * Getter for useCustomSettings
     *
     * @return bool
     */
    public function getUseCustomSettings()
    {
        return $this->useCustomSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomSettings;
    }

    /**
     * Setter for useCustomSettings
     *
     * @param bool $useCustomSettings
     * @return $this
     */
    public function setUseCustomSettings($useCustomSettings)
    {
        $this->useCustomSettings = $useCustomSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomSettings()
    {
        $this->useCustomSettings = null;
        return $this;
    }

    /**
     * Getter for userNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify
     */
    public function getUserNumbers()
    {
        return $this->userNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userNumbers;
    }

    /**
     * Setter for userNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify $userNumbers
     * @return $this
     */
    public function setUserNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify $userNumbers)
    {
        $this->userNumbers = $userNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserNumbers()
    {
        $this->userNumbers = null;
        return $this;
    }


}

