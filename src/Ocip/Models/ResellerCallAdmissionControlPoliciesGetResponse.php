<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallAdmissionControlPoliciesGetResponse
 *
 * Response to the ResellerCallAdmissionControlPoliciesGetRequest.
 *         The response contains the reseller call admission control policies information.
 *
 * @see ResellerCallAdmissionControlPoliciesGetRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:327","type":"sequence"}]
 */
class ResellerCallAdmissionControlPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableCallAdmissionControl
     * @Type bool
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @var bool|null
     */
    protected $enableCallAdmissionControl = null;

    /**
     * @ElementName maxConcurrentNetworkSessions
     * @Type int
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @MinInclusive 0
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxConcurrentNetworkSessions = null;

    /**
     * @ElementName maxConcurrentNetworkSessionsThreshold
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxConcurrentNetworkSessionsThreshold = null;

    /**
     * @ElementName maxNetworkCallsPerSecond
     * @Type int
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @MinInclusive 0
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxNetworkCallsPerSecond = null;

    /**
     * @ElementName maxNetworkCallsPerSecondThreshold
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxNetworkCallsPerSecondThreshold = null;

    /**
     * @ElementName maxConcurrentExternalSIPRECSessions
     * @Type int
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @MinInclusive 0
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxConcurrentExternalSIPRECSessions = null;

    /**
     * @ElementName maxConcurrentExternalSIPRECSessionsThreshold
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:327
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null
     */
    protected $maxConcurrentExternalSIPRECSessionsThreshold = null;

    /**
     * Getter for enableCallAdmissionControl
     *
     * @return bool
     */
    public function getEnableCallAdmissionControl()
    {
        return $this->enableCallAdmissionControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallAdmissionControl;
    }

    /**
     * Setter for enableCallAdmissionControl
     *
     * @param bool $enableCallAdmissionControl
     * @return $this
     */
    public function setEnableCallAdmissionControl($enableCallAdmissionControl)
    {
        $this->enableCallAdmissionControl = $enableCallAdmissionControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallAdmissionControl()
    {
        $this->enableCallAdmissionControl = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentNetworkSessions
     *
     * @return int
     */
    public function getMaxConcurrentNetworkSessions()
    {
        return $this->maxConcurrentNetworkSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentNetworkSessions;
    }

    /**
     * Setter for maxConcurrentNetworkSessions
     *
     * @param int $maxConcurrentNetworkSessions
     * @return $this
     */
    public function setMaxConcurrentNetworkSessions($maxConcurrentNetworkSessions)
    {
        $this->maxConcurrentNetworkSessions = $maxConcurrentNetworkSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentNetworkSessions()
    {
        $this->maxConcurrentNetworkSessions = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentNetworkSessionsThreshold
     *
     * @return int
     */
    public function getMaxConcurrentNetworkSessionsThreshold()
    {
        return $this->maxConcurrentNetworkSessionsThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentNetworkSessionsThreshold;
    }

    /**
     * Setter for maxConcurrentNetworkSessionsThreshold
     *
     * @param int $maxConcurrentNetworkSessionsThreshold
     * @return $this
     */
    public function setMaxConcurrentNetworkSessionsThreshold($maxConcurrentNetworkSessionsThreshold)
    {
        $this->maxConcurrentNetworkSessionsThreshold = $maxConcurrentNetworkSessionsThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentNetworkSessionsThreshold()
    {
        $this->maxConcurrentNetworkSessionsThreshold = null;
        return $this;
    }

    /**
     * Getter for maxNetworkCallsPerSecond
     *
     * @return int
     */
    public function getMaxNetworkCallsPerSecond()
    {
        return $this->maxNetworkCallsPerSecond instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNetworkCallsPerSecond;
    }

    /**
     * Setter for maxNetworkCallsPerSecond
     *
     * @param int $maxNetworkCallsPerSecond
     * @return $this
     */
    public function setMaxNetworkCallsPerSecond($maxNetworkCallsPerSecond)
    {
        $this->maxNetworkCallsPerSecond = $maxNetworkCallsPerSecond;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNetworkCallsPerSecond()
    {
        $this->maxNetworkCallsPerSecond = null;
        return $this;
    }

    /**
     * Getter for maxNetworkCallsPerSecondThreshold
     *
     * @return int
     */
    public function getMaxNetworkCallsPerSecondThreshold()
    {
        return $this->maxNetworkCallsPerSecondThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNetworkCallsPerSecondThreshold;
    }

    /**
     * Setter for maxNetworkCallsPerSecondThreshold
     *
     * @param int $maxNetworkCallsPerSecondThreshold
     * @return $this
     */
    public function setMaxNetworkCallsPerSecondThreshold($maxNetworkCallsPerSecondThreshold)
    {
        $this->maxNetworkCallsPerSecondThreshold = $maxNetworkCallsPerSecondThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNetworkCallsPerSecondThreshold()
    {
        $this->maxNetworkCallsPerSecondThreshold = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentExternalSIPRECSessions
     *
     * @return int
     */
    public function getMaxConcurrentExternalSIPRECSessions()
    {
        return $this->maxConcurrentExternalSIPRECSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentExternalSIPRECSessions;
    }

    /**
     * Setter for maxConcurrentExternalSIPRECSessions
     *
     * @param int $maxConcurrentExternalSIPRECSessions
     * @return $this
     */
    public function setMaxConcurrentExternalSIPRECSessions($maxConcurrentExternalSIPRECSessions)
    {
        $this->maxConcurrentExternalSIPRECSessions = $maxConcurrentExternalSIPRECSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentExternalSIPRECSessions()
    {
        $this->maxConcurrentExternalSIPRECSessions = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentExternalSIPRECSessionsThreshold
     *
     * @return int
     */
    public function getMaxConcurrentExternalSIPRECSessionsThreshold()
    {
        return $this->maxConcurrentExternalSIPRECSessionsThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentExternalSIPRECSessionsThreshold;
    }

    /**
     * Setter for maxConcurrentExternalSIPRECSessionsThreshold
     *
     * @param int $maxConcurrentExternalSIPRECSessionsThreshold
     * @return $this
     */
    public function setMaxConcurrentExternalSIPRECSessionsThreshold($maxConcurrentExternalSIPRECSessionsThreshold)
    {
        $this->maxConcurrentExternalSIPRECSessionsThreshold = $maxConcurrentExternalSIPRECSessionsThreshold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentExternalSIPRECSessionsThreshold()
    {
        $this->maxConcurrentExternalSIPRECSessionsThreshold = null;
        return $this;
    }


}

