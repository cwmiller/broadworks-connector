<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceActivationPolicyModifyRequest
 *
 * Modify the Device Activation policy of a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3807","type":"sequence"}]
 */
class GroupDeviceActivationPolicyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3807
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3807
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useGroupSettings
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3807
     * @var bool|null
     */
    protected $useGroupSettings = null;

    /**
     * @ElementName allowActivationCodeRequestByUser
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3807
     * @var bool|null
     */
    protected $allowActivationCodeRequestByUser = null;

    /**
     * @ElementName sendActivationCodeInEmail
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3807
     * @var bool|null
     */
    protected $sendActivationCodeInEmail = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for useGroupSettings
     *
     * @return bool
     */
    public function getUseGroupSettings()
    {
        return $this->useGroupSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupSettings;
    }

    /**
     * Setter for useGroupSettings
     *
     * @param bool $useGroupSettings
     * @return $this
     */
    public function setUseGroupSettings($useGroupSettings)
    {
        $this->useGroupSettings = $useGroupSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupSettings()
    {
        $this->useGroupSettings = null;
        return $this;
    }

    /**
     * Getter for allowActivationCodeRequestByUser
     *
     * @return bool
     */
    public function getAllowActivationCodeRequestByUser()
    {
        return $this->allowActivationCodeRequestByUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowActivationCodeRequestByUser;
    }

    /**
     * Setter for allowActivationCodeRequestByUser
     *
     * @param bool $allowActivationCodeRequestByUser
     * @return $this
     */
    public function setAllowActivationCodeRequestByUser($allowActivationCodeRequestByUser)
    {
        $this->allowActivationCodeRequestByUser = $allowActivationCodeRequestByUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowActivationCodeRequestByUser()
    {
        $this->allowActivationCodeRequestByUser = null;
        return $this;
    }

    /**
     * Getter for sendActivationCodeInEmail
     *
     * @return bool
     */
    public function getSendActivationCodeInEmail()
    {
        return $this->sendActivationCodeInEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendActivationCodeInEmail;
    }

    /**
     * Setter for sendActivationCodeInEmail
     *
     * @param bool $sendActivationCodeInEmail
     * @return $this
     */
    public function setSendActivationCodeInEmail($sendActivationCodeInEmail)
    {
        $this->sendActivationCodeInEmail = $sendActivationCodeInEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendActivationCodeInEmail()
    {
        $this->sendActivationCodeInEmail = null;
        return $this;
    }
}

