<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExchangeIntegrationGetResponse
 *
 * Response to GroupExchangeIntegrationGetRequest.
 *
 * @see GroupExchangeIntegrationGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5393","type":"sequence"}]
 */
class GroupExchangeIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableExchangeIntegration
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:5393
     * @var bool|null
     */
    protected $enableExchangeIntegration = null;

    /**
     * @ElementName exchangeURL
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5393
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $exchangeURL = null;

    /**
     * @ElementName exchangeUserName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5393
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $exchangeUserName = null;

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

