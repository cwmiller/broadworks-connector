<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingParametersModifyRequest
 *
 * Request to modify OCI Reporting system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCIReportingParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serverPort
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName enableConnectionPing
     * @var bool|null
     */
    private $enableConnectionPing = null;

    /**
     * @ElementName connectionPingIntervalSeconds
     * @var int|null
     */
    private $connectionPingIntervalSeconds = null;

    /**
     * @ElementName alterPasswords
     * @var bool|null
     */
    private $alterPasswords = null;

    /**
     * @ElementName enablePublicIdentityReporting
     * @var bool|null
     */
    private $enablePublicIdentityReporting = null;

    /**
     * Getter for serverPort
     *
     * @ElementName serverPort
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @ElementName serverPort
     * @param int|null $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * Getter for enableConnectionPing
     *
     * @ElementName enableConnectionPing
     * @return bool|null
     */
    public function getEnableConnectionPing()
    {
        return $this->enableConnectionPing;
    }

    /**
     * Setter for enableConnectionPing
     *
     * @ElementName enableConnectionPing
     * @param bool|null $enableConnectionPing
     * @return $this
     */
    public function setEnableConnectionPing($enableConnectionPing)
    {
        $this->enableConnectionPing = $enableConnectionPing;
        return $this;
    }

    /**
     * Getter for connectionPingIntervalSeconds
     *
     * @ElementName connectionPingIntervalSeconds
     * @return int|null
     */
    public function getConnectionPingIntervalSeconds()
    {
        return $this->connectionPingIntervalSeconds;
    }

    /**
     * Setter for connectionPingIntervalSeconds
     *
     * @ElementName connectionPingIntervalSeconds
     * @param int|null $connectionPingIntervalSeconds
     * @return $this
     */
    public function setConnectionPingIntervalSeconds($connectionPingIntervalSeconds)
    {
        $this->connectionPingIntervalSeconds = $connectionPingIntervalSeconds;
        return $this;
    }

    /**
     * Getter for alterPasswords
     *
     * @ElementName alterPasswords
     * @return bool|null
     */
    public function getAlterPasswords()
    {
        return $this->alterPasswords;
    }

    /**
     * Setter for alterPasswords
     *
     * @ElementName alterPasswords
     * @param bool|null $alterPasswords
     * @return $this
     */
    public function setAlterPasswords($alterPasswords)
    {
        $this->alterPasswords = $alterPasswords;
        return $this;
    }

    /**
     * Getter for enablePublicIdentityReporting
     *
     * @ElementName enablePublicIdentityReporting
     * @return bool|null
     */
    public function getEnablePublicIdentityReporting()
    {
        return $this->enablePublicIdentityReporting;
    }

    /**
     * Setter for enablePublicIdentityReporting
     *
     * @ElementName enablePublicIdentityReporting
     * @param bool|null $enablePublicIdentityReporting
     * @return $this
     */
    public function setEnablePublicIdentityReporting($enablePublicIdentityReporting)
    {
        $this->enablePublicIdentityReporting = $enablePublicIdentityReporting;
        return $this;
    }


}

