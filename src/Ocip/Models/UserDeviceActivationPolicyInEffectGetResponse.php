<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDeviceActivationPolicyInEffectGetResponse
 *
 * Response to UserDeviceActivationPolicyInEffectGetRequest.
 *
 * @see UserDeviceActivationPolicyInEffectGetRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1566","type":"sequence"}]
 */
class UserDeviceActivationPolicyInEffectGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName allowActivationCodeRequestByUser
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1566
     * @var bool|null
     */
    protected $allowActivationCodeRequestByUser = null;

    /**
     * @ElementName sendActivationCodeInEmail
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1566
     * @var bool|null
     */
    protected $sendActivationCodeInEmail = null;

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

