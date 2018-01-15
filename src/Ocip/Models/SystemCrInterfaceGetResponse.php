<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCrInterfaceGetResponse
 *
 * Response to the SystemCrInterfaceGetRequest.
 */
class SystemCrInterfaceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName crAuditEnabled
     * @var bool|null
     */
    private $crAuditEnabled = null;

    /**
     * @ElementName crAuditIntervalMilliseconds
     * @var int|null
     */
    private $crAuditIntervalMilliseconds = null;

    /**
     * @ElementName crAuditTimeoutMilliseconds
     * @var int|null
     */
    private $crAuditTimeoutMilliseconds = null;

    /**
     * @ElementName crConnectionEnabled
     * @var bool|null
     */
    private $crConnectionEnabled = null;

    /**
     * @ElementName crConnectionTimeoutMilliseconds
     * @var int|null
     */
    private $crConnectionTimeoutMilliseconds = null;

    /**
     * Getter for crAuditEnabled
     *
     * @ElementName crAuditEnabled
     * @return bool|null
     */
    public function getCrAuditEnabled()
    {
        return $this->crAuditEnabled;
    }

    /**
     * Setter for crAuditEnabled
     *
     * @ElementName crAuditEnabled
     * @param bool|null $crAuditEnabled
     * @return $this
     */
    public function setCrAuditEnabled($crAuditEnabled)
    {
        $this->crAuditEnabled = $crAuditEnabled;
        return $this;
    }

    /**
     * Getter for crAuditIntervalMilliseconds
     *
     * @ElementName crAuditIntervalMilliseconds
     * @return int|null
     */
    public function getCrAuditIntervalMilliseconds()
    {
        return $this->crAuditIntervalMilliseconds;
    }

    /**
     * Setter for crAuditIntervalMilliseconds
     *
     * @ElementName crAuditIntervalMilliseconds
     * @param int|null $crAuditIntervalMilliseconds
     * @return $this
     */
    public function setCrAuditIntervalMilliseconds($crAuditIntervalMilliseconds)
    {
        $this->crAuditIntervalMilliseconds = $crAuditIntervalMilliseconds;
        return $this;
    }

    /**
     * Getter for crAuditTimeoutMilliseconds
     *
     * @ElementName crAuditTimeoutMilliseconds
     * @return int|null
     */
    public function getCrAuditTimeoutMilliseconds()
    {
        return $this->crAuditTimeoutMilliseconds;
    }

    /**
     * Setter for crAuditTimeoutMilliseconds
     *
     * @ElementName crAuditTimeoutMilliseconds
     * @param int|null $crAuditTimeoutMilliseconds
     * @return $this
     */
    public function setCrAuditTimeoutMilliseconds($crAuditTimeoutMilliseconds)
    {
        $this->crAuditTimeoutMilliseconds = $crAuditTimeoutMilliseconds;
        return $this;
    }

    /**
     * Getter for crConnectionEnabled
     *
     * @ElementName crConnectionEnabled
     * @return bool|null
     */
    public function getCrConnectionEnabled()
    {
        return $this->crConnectionEnabled;
    }

    /**
     * Setter for crConnectionEnabled
     *
     * @ElementName crConnectionEnabled
     * @param bool|null $crConnectionEnabled
     * @return $this
     */
    public function setCrConnectionEnabled($crConnectionEnabled)
    {
        $this->crConnectionEnabled = $crConnectionEnabled;
        return $this;
    }

    /**
     * Getter for crConnectionTimeoutMilliseconds
     *
     * @ElementName crConnectionTimeoutMilliseconds
     * @return int|null
     */
    public function getCrConnectionTimeoutMilliseconds()
    {
        return $this->crConnectionTimeoutMilliseconds;
    }

    /**
     * Setter for crConnectionTimeoutMilliseconds
     *
     * @ElementName crConnectionTimeoutMilliseconds
     * @param int|null $crConnectionTimeoutMilliseconds
     * @return $this
     */
    public function setCrConnectionTimeoutMilliseconds($crConnectionTimeoutMilliseconds)
    {
        $this->crConnectionTimeoutMilliseconds = $crConnectionTimeoutMilliseconds;
        return $this;
    }


}

