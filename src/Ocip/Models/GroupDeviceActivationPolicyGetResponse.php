<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceActivationPolicyGetResponse
 *
 * Response to GroupDeviceActivationPolicyGetRequest.
 *
 * @see GroupDeviceActivationPolicyGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3789","type":"sequence"}]
 */
class GroupDeviceActivationPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useGroupSettings
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:3789
     * @var bool|null
     */
    protected $useGroupSettings = null;

    /**
     * @ElementName allowActivationCodeRequestByUser
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:3789
     * @var bool|null
     */
    protected $allowActivationCodeRequestByUser = null;

    /**
     * @ElementName sendActivationCodeInEmail
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:3789
     * @var bool|null
     */
    protected $sendActivationCodeInEmail = null;

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

