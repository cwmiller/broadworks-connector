<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingParametersGetResponse22
 *
 * Response to SystemOCIReportingParametersGetRequest22.
 *         Contains a list of system OCI Reporting parameters.
 *
 * @see SystemOCIReportingParametersGetRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12258","type":"sequence"}]
 */
class SystemOCIReportingParametersGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serverPort
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12258
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName enableConnectionPing
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12258
     * @var bool|null
     */
    private $enableConnectionPing = null;

    /**
     * @ElementName connectionPingIntervalSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12258
     * @var int|null
     */
    private $connectionPingIntervalSeconds = null;

    /**
     * @ElementName alterPasswords
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12258
     * @var bool|null
     */
    private $alterPasswords = null;

    /**
     * @ElementName enablePublicIdentityReporting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12258
     * @var bool|null
     */
    private $enablePublicIdentityReporting = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12258
     * @var bool|null
     */
    private $secure = null;

    /**
     * Getter for serverPort
     *
     * @return int
     */
    public function getServerPort()
    {
        return $this->serverPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @param int $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerPort()
    {
        $this->serverPort = null;
        return $this;
    }

    /**
     * Getter for enableConnectionPing
     *
     * @return bool
     */
    public function getEnableConnectionPing()
    {
        return $this->enableConnectionPing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableConnectionPing;
    }

    /**
     * Setter for enableConnectionPing
     *
     * @param bool $enableConnectionPing
     * @return $this
     */
    public function setEnableConnectionPing($enableConnectionPing)
    {
        $this->enableConnectionPing = $enableConnectionPing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableConnectionPing()
    {
        $this->enableConnectionPing = null;
        return $this;
    }

    /**
     * Getter for connectionPingIntervalSeconds
     *
     * @return int
     */
    public function getConnectionPingIntervalSeconds()
    {
        return $this->connectionPingIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->connectionPingIntervalSeconds;
    }

    /**
     * Setter for connectionPingIntervalSeconds
     *
     * @param int $connectionPingIntervalSeconds
     * @return $this
     */
    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds)
    {
        $this->connectionPingIntervalSeconds = $connectionPingIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConnectionPingIntervalSeconds()
    {
        $this->connectionPingIntervalSeconds = null;
        return $this;
    }

    /**
     * Getter for alterPasswords
     *
     * @return bool
     */
    public function getAlterPasswords()
    {
        return $this->alterPasswords instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alterPasswords;
    }

    /**
     * Setter for alterPasswords
     *
     * @param bool $alterPasswords
     * @return $this
     */
    public function setAlterPasswords($alterPasswords)
    {
        $this->alterPasswords = $alterPasswords;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlterPasswords()
    {
        $this->alterPasswords = null;
        return $this;
    }

    /**
     * Getter for enablePublicIdentityReporting
     *
     * @return bool
     */
    public function getEnablePublicIdentityReporting()
    {
        return $this->enablePublicIdentityReporting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePublicIdentityReporting;
    }

    /**
     * Setter for enablePublicIdentityReporting
     *
     * @param bool $enablePublicIdentityReporting
     * @return $this
     */
    public function setEnablePublicIdentityReporting($enablePublicIdentityReporting)
    {
        $this->enablePublicIdentityReporting = $enablePublicIdentityReporting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePublicIdentityReporting()
    {
        $this->enablePublicIdentityReporting = null;
        return $this;
    }

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
        return $this;
    }


}

