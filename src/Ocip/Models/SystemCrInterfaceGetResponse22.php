<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCrInterfaceGetResponse22
 *
 * Response to the SystemCrInterfaceGetRequest22.
 *
 * @see SystemCrInterfaceGetRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6617","type":"sequence"}]
 */
class SystemCrInterfaceGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName crAuditEnabled
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var bool|null
     */
    private $crAuditEnabled = null;

    /**
     * @ElementName crAuditIntervalMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var int|null
     */
    private $crAuditIntervalMilliseconds = null;

    /**
     * @ElementName crAuditTimeoutMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var int|null
     */
    private $crAuditTimeoutMilliseconds = null;

    /**
     * @ElementName crConnectionEnabled
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var bool|null
     */
    private $crConnectionEnabled = null;

    /**
     * @ElementName crConnectionTimeoutMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var int|null
     */
    private $crConnectionTimeoutMilliseconds = null;

    /**
     * @ElementName crTcpConnectionTimeoutSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var int|null
     */
    private $crTcpConnectionTimeoutSeconds = null;

    /**
     * @ElementName crNumberOfReconnectionAttempts
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6617
     * @var int|null
     */
    private $crNumberOfReconnectionAttempts = null;

    /**
     * Getter for crAuditEnabled
     *
     * @return bool
     */
    public function getCrAuditEnabled()
    {
        return $this->crAuditEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crAuditEnabled;
    }

    /**
     * Setter for crAuditEnabled
     *
     * @param bool $crAuditEnabled
     * @return $this
     */
    public function setCrAuditEnabled($crAuditEnabled)
    {
        $this->crAuditEnabled = $crAuditEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrAuditEnabled()
    {
        $this->crAuditEnabled = null;
        return $this;
    }

    /**
     * Getter for crAuditIntervalMilliseconds
     *
     * @return int
     */
    public function getCrAuditIntervalMilliseconds()
    {
        return $this->crAuditIntervalMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crAuditIntervalMilliseconds;
    }

    /**
     * Setter for crAuditIntervalMilliseconds
     *
     * @param int $crAuditIntervalMilliseconds
     * @return $this
     */
    public function setCrAuditIntervalMilliseconds($crAuditIntervalMilliseconds)
    {
        $this->crAuditIntervalMilliseconds = $crAuditIntervalMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrAuditIntervalMilliseconds()
    {
        $this->crAuditIntervalMilliseconds = null;
        return $this;
    }

    /**
     * Getter for crAuditTimeoutMilliseconds
     *
     * @return int
     */
    public function getCrAuditTimeoutMilliseconds()
    {
        return $this->crAuditTimeoutMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crAuditTimeoutMilliseconds;
    }

    /**
     * Setter for crAuditTimeoutMilliseconds
     *
     * @param int $crAuditTimeoutMilliseconds
     * @return $this
     */
    public function setCrAuditTimeoutMilliseconds($crAuditTimeoutMilliseconds)
    {
        $this->crAuditTimeoutMilliseconds = $crAuditTimeoutMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrAuditTimeoutMilliseconds()
    {
        $this->crAuditTimeoutMilliseconds = null;
        return $this;
    }

    /**
     * Getter for crConnectionEnabled
     *
     * @return bool
     */
    public function getCrConnectionEnabled()
    {
        return $this->crConnectionEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crConnectionEnabled;
    }

    /**
     * Setter for crConnectionEnabled
     *
     * @param bool $crConnectionEnabled
     * @return $this
     */
    public function setCrConnectionEnabled($crConnectionEnabled)
    {
        $this->crConnectionEnabled = $crConnectionEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrConnectionEnabled()
    {
        $this->crConnectionEnabled = null;
        return $this;
    }

    /**
     * Getter for crConnectionTimeoutMilliseconds
     *
     * @return int
     */
    public function getCrConnectionTimeoutMilliseconds()
    {
        return $this->crConnectionTimeoutMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crConnectionTimeoutMilliseconds;
    }

    /**
     * Setter for crConnectionTimeoutMilliseconds
     *
     * @param int $crConnectionTimeoutMilliseconds
     * @return $this
     */
    public function setCrConnectionTimeoutMilliseconds($crConnectionTimeoutMilliseconds)
    {
        $this->crConnectionTimeoutMilliseconds = $crConnectionTimeoutMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrConnectionTimeoutMilliseconds()
    {
        $this->crConnectionTimeoutMilliseconds = null;
        return $this;
    }

    /**
     * Getter for crTcpConnectionTimeoutSeconds
     *
     * @return int
     */
    public function getCrTcpConnectionTimeoutSeconds()
    {
        return $this->crTcpConnectionTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crTcpConnectionTimeoutSeconds;
    }

    /**
     * Setter for crTcpConnectionTimeoutSeconds
     *
     * @param int $crTcpConnectionTimeoutSeconds
     * @return $this
     */
    public function setCrTcpConnectionTimeoutSeconds($crTcpConnectionTimeoutSeconds)
    {
        $this->crTcpConnectionTimeoutSeconds = $crTcpConnectionTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrTcpConnectionTimeoutSeconds()
    {
        $this->crTcpConnectionTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for crNumberOfReconnectionAttempts
     *
     * @return int
     */
    public function getCrNumberOfReconnectionAttempts()
    {
        return $this->crNumberOfReconnectionAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->crNumberOfReconnectionAttempts;
    }

    /**
     * Setter for crNumberOfReconnectionAttempts
     *
     * @param int $crNumberOfReconnectionAttempts
     * @return $this
     */
    public function setCrNumberOfReconnectionAttempts($crNumberOfReconnectionAttempts)
    {
        $this->crNumberOfReconnectionAttempts = $crNumberOfReconnectionAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCrNumberOfReconnectionAttempts()
    {
        $this->crNumberOfReconnectionAttempts = null;
        return $this;
    }


}

