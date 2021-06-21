<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerDeviceActivationPolicyGetResponse
 *
 * Response to ResellerDeviceActivationPolicyGetRequest.
 *
 * @see ResellerDeviceActivationPolicyGetRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:461","type":"sequence"}]
 */
class ResellerDeviceActivationPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useResellerSettings
     * @Type bool
     * @Group b009175f2a2a9d38115e319a6ad64d7f:461
     * @var bool|null
     */
    private $useResellerSettings = null;

    /**
     * @ElementName allowActivationCodeRequestByUser
     * @Type bool
     * @Group b009175f2a2a9d38115e319a6ad64d7f:461
     * @var bool|null
     */
    private $allowActivationCodeRequestByUser = null;

    /**
     * @ElementName sendActivationCodeInEmail
     * @Type bool
     * @Group b009175f2a2a9d38115e319a6ad64d7f:461
     * @var bool|null
     */
    private $sendActivationCodeInEmail = null;

    /**
     * Getter for useResellerSettings
     *
     * @return bool
     */
    public function getUseResellerSettings()
    {
        return $this->useResellerSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useResellerSettings;
    }

    /**
     * Setter for useResellerSettings
     *
     * @param bool $useResellerSettings
     * @return $this
     */
    public function setUseResellerSettings($useResellerSettings)
    {
        $this->useResellerSettings = $useResellerSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseResellerSettings()
    {
        $this->useResellerSettings = null;
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

