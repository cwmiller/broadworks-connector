<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExchangeIntegrationGetResponse
 *
 * Response to GroupExchangeIntegrationGetRequest.
 *
 * @see GroupExchangeIntegrationGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:4757","type":"sequence"}]
 */
class GroupExchangeIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableExchangeIntegration
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4757
     * @var bool|null
     */
    private $enableExchangeIntegration = null;

    /**
     * @ElementName exchangeURL
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4757
     * @var string|null
     */
    private $exchangeURL = null;

    /**
     * @ElementName exchangeUserName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4757
     * @var string|null
     */
    private $exchangeUserName = null;

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
     * @return string
     */
    public function getExchangeURL()
    {
        return $this->exchangeURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exchangeURL;
    }

    /**
     * Setter for exchangeURL
     *
     * @param string $exchangeURL
     * @return $this
     */
    public function setExchangeURL($exchangeURL)
    {
        $this->exchangeURL = $exchangeURL;
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
     * Getter for exchangeUserName
     *
     * @return string
     */
    public function getExchangeUserName()
    {
        return $this->exchangeUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exchangeUserName;
    }

    /**
     * Setter for exchangeUserName
     *
     * @param string $exchangeUserName
     * @return $this
     */
    public function setExchangeUserName($exchangeUserName)
    {
        $this->exchangeUserName = $exchangeUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExchangeUserName()
    {
        $this->exchangeUserName = null;
        return $this;
    }


}

