<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingParametersGetResponse
 *
 * Response to SystemOCIReportingParametersGetListRequest.
 *         Contains a list of system OCI Reporting parameters.
 *
 * @see SystemOCIReportingParametersGetListRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:5179","type":"sequence"}]
 */
class SystemOCIReportingParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serverPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5179
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName enableConnectionPing
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5179
     * @var bool|null
     */
    private $enableConnectionPing = null;

    /**
     * @ElementName connectionPingIntervalSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5179
     * @var int|null
     */
    private $connectionPingIntervalSeconds = null;

    /**
     * @ElementName alterPasswords
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5179
     * @var bool|null
     */
    private $alterPasswords = null;

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


}

