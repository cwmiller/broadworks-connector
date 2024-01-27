<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceActivationPolicyGetResponse
 *
 * Response to ServiceProviderDeviceActivationPolicyGetRequest.
 *
 * @see ServiceProviderDeviceActivationPolicyGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2915","type":"sequence"}]
 */
class ServiceProviderDeviceActivationPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useServiceProviderSettings
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:2915
     * @var bool|null
     */
    protected $useServiceProviderSettings = null;

    /**
     * @ElementName allowActivationCodeRequestByUser
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:2915
     * @var bool|null
     */
    protected $allowActivationCodeRequestByUser = null;

    /**
     * @ElementName sendActivationCodeInEmail
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:2915
     * @var bool|null
     */
    protected $sendActivationCodeInEmail = null;

    /**
     * Getter for useServiceProviderSettings
     *
     * @return bool
     */
    public function getUseServiceProviderSettings()
    {
        return $this->useServiceProviderSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderSettings;
    }

    /**
     * Setter for useServiceProviderSettings
     *
     * @param bool $useServiceProviderSettings
     * @return $this
     */
    public function setUseServiceProviderSettings($useServiceProviderSettings)
    {
        $this->useServiceProviderSettings = $useServiceProviderSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderSettings()
    {
        $this->useServiceProviderSettings = null;
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

