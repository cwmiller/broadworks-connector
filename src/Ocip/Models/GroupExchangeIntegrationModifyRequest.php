<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExchangeIntegrationModifyRequest
 *
 * Modify the group level configuration for Exchange Integration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupExchangeIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName enableExchangeIntegration
     * @var bool|null
     */
    private $enableExchangeIntegration = null;

    /**
     * @ElementName exchangeURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $exchangeURL = null;

    /**
     * @ElementName exchangeCredentials
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $exchangeCredentials = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for enableExchangeIntegration
     *
     * @ElementName enableExchangeIntegration
     * @return bool|null
     */
    public function getEnableExchangeIntegration()
    {
        return $this->enableExchangeIntegration;
    }

    /**
     * Setter for enableExchangeIntegration
     *
     * @ElementName enableExchangeIntegration
     * @param bool|null $enableExchangeIntegration
     * @return $this
     */
    public function setEnableExchangeIntegration($enableExchangeIntegration)
    {
        $this->enableExchangeIntegration = $enableExchangeIntegration;
        return $this;
    }

    /**
     * Getter for exchangeURL
     *
     * @ElementName exchangeURL
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExchangeURL()
    {
        return $this->exchangeURL;
    }

    /**
     * Setter for exchangeURL
     *
     * @ElementName exchangeURL
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $exchangeURL
     * @return $this
     */
    public function setExchangeURL($exchangeURL)
    {
        $this->exchangeURL = $exchangeURL;
        return $this;
    }

    /**
     * Getter for exchangeCredentials
     *
     * @ElementName exchangeCredentials
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExchangeCredentials()
    {
        return $this->exchangeCredentials;
    }

    /**
     * Setter for exchangeCredentials
     *
     * @ElementName exchangeCredentials
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil $exchangeCredentials
     * @return $this
     */
    public function setExchangeCredentials($exchangeCredentials)
    {
        $this->exchangeCredentials = $exchangeCredentials;
        return $this;
    }


}

