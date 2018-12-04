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
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:4549","type":"sequence"}]
 */
class GroupExchangeIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4549
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4549
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName enableExchangeIntegration
     * @Type bool
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4549
     * @var bool|null
     */
    private $enableExchangeIntegration = null;

    /**
     * @ElementName exchangeURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4549
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $exchangeURL = null;

    /**
     * @ElementName exchangeCredentials
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword
     * @Nillable
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4549
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $exchangeCredentials = null;

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
     * Getter for enableExchangeIntegration
     *
     * @return bool
     */
    public function getEnableExchangeIntegration()
    {
        return $this->enableExchangeIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableExchangeIntegration;
    }

    /**
     * Setter for enableExchangeIntegration
     *
     * @param bool $enableExchangeIntegration
     * @return $this
     */
    public function setEnableExchangeIntegration($enableExchangeIntegration)
    {
        $this->enableExchangeIntegration = $enableExchangeIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableExchangeIntegration()
    {
        $this->enableExchangeIntegration = null;
        return $this;
    }

    /**
     * Getter for exchangeURL
     *
     * @return string|null
     */
    public function getExchangeURL()
    {
        return $this->exchangeURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exchangeURL;
    }

    /**
     * Setter for exchangeURL
     *
     * @param string|null $exchangeURL
     * @return $this
     */
    public function setExchangeURL($exchangeURL)
    {
        if ($exchangeURL === null) {
            $this->exchangeURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->exchangeURL = $exchangeURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExchangeURL()
    {
        $this->exchangeURL = null;
        return $this;
    }

    /**
     * Getter for exchangeCredentials
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword|null
     */
    public function getExchangeCredentials()
    {
        return $this->exchangeCredentials instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exchangeCredentials;
    }

    /**
     * Setter for exchangeCredentials
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword|null $exchangeCredentials
     * @return $this
     */
    public function setExchangeCredentials(\CWM\BroadWorksConnector\Ocip\Models\ExchangeUserNamePassword $exchangeCredentials)
    {
        if ($exchangeCredentials === null) {
            $this->exchangeCredentials = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->exchangeCredentials = $exchangeCredentials;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExchangeCredentials()
    {
        $this->exchangeCredentials = null;
        return $this;
    }


}

