<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExchangeIntegrationGetResponse
 *
 * Response to GroupExchangeIntegrationGetRequest.
 */
class GroupExchangeIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableExchangeIntegration
     * @var bool|null
     */
    private $enableExchangeIntegration = null;

    /**
     * @ElementName exchangeURL
     * @var string|null
     */
    private $exchangeURL = null;

    /**
     * @ElementName exchangeUserName
     * @var string|null
     */
    private $exchangeUserName = null;

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
     * @return string|null
     */
    public function getExchangeURL()
    {
        return $this->exchangeURL;
    }

    /**
     * Setter for exchangeURL
     *
     * @ElementName exchangeURL
     * @param string|null $exchangeURL
     * @return $this
     */
    public function setExchangeURL($exchangeURL)
    {
        $this->exchangeURL = $exchangeURL;
        return $this;
    }

    /**
     * Getter for exchangeUserName
     *
     * @ElementName exchangeUserName
     * @return string|null
     */
    public function getExchangeUserName()
    {
        return $this->exchangeUserName;
    }

    /**
     * Setter for exchangeUserName
     *
     * @ElementName exchangeUserName
     * @param string|null $exchangeUserName
     * @return $this
     */
    public function setExchangeUserName($exchangeUserName)
    {
        $this->exchangeUserName = $exchangeUserName;
        return $this;
    }


}

