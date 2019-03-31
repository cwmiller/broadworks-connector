<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallAdmissionControlPoliciesModifyRequest
 *
 * Modify the reseller call admission control policies.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:243","type":"sequence"}]
 */
class ResellerCallAdmissionControlPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName enableCallAdmissionControl
     * @Type bool
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @var bool|null
     */
    private $enableCallAdmissionControl = null;

    /**
     * @ElementName maxConcurrentNetworkSessions
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinInclusive
     * @MaxInclusive 2147483647
     * @var int|null
     */
    private $maxConcurrentNetworkSessions = null;

    /**
     * @ElementName maxConcurrentNetworkSessionsThreshold
     * @Type int
     * @Nillable
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxConcurrentNetworkSessionsThreshold = null;

    /**
     * @ElementName maxNetworkCallsPerSecond
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinInclusive
     * @MaxInclusive 2147483647
     * @var int|null
     */
    private $maxNetworkCallsPerSecond = null;

    /**
     * @ElementName maxNetworkCallsPerSecondThreshold
     * @Type int
     * @Nillable
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxNetworkCallsPerSecondThreshold = null;

    /**
     * @ElementName maxConcurrentExternalSIPRECSessions
     * @Type int
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinInclusive
     * @MaxInclusive 2147483647
     * @var int|null
     */
    private $maxConcurrentExternalSIPRECSessions = null;

    /**
     * @ElementName maxConcurrentExternalSIPRECSessionsThreshold
     * @Type int
     * @Nillable
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:243
     * @MinInclusive 1
     * @MaxInclusive 2147483647
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $maxConcurrentExternalSIPRECSessionsThreshold = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

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
     * @return int|null
     */
    public function getMaxConcurrentNetworkSessionsThreshold()
    {
        return $this->maxConcurrentNetworkSessionsThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentNetworkSessionsThreshold;
    }

    /**
     * Setter for maxConcurrentNetworkSessionsThreshold
     *
     * @param int|null $maxConcurrentNetworkSessionsThreshold
     * @return $this
     */
    public function setMaxConcurrentNetworkSessionsThreshold($maxConcurrentNetworkSessionsThreshold = null)
    {
        if ($maxConcurrentNetworkSessionsThreshold === null) {
            $this->maxConcurrentNetworkSessionsThreshold = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxConcurrentNetworkSessionsThreshold = $maxConcurrentNetworkSessionsThreshold;
        }
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
     * @return int|null
     */
    public function getMaxNetworkCallsPerSecondThreshold()
    {
        return $this->maxNetworkCallsPerSecondThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNetworkCallsPerSecondThreshold;
    }

    /**
     * Setter for maxNetworkCallsPerSecondThreshold
     *
     * @param int|null $maxNetworkCallsPerSecondThreshold
     * @return $this
     */
    public function setMaxNetworkCallsPerSecondThreshold($maxNetworkCallsPerSecondThreshold = null)
    {
        if ($maxNetworkCallsPerSecondThreshold === null) {
            $this->maxNetworkCallsPerSecondThreshold = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxNetworkCallsPerSecondThreshold = $maxNetworkCallsPerSecondThreshold;
        }
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
     * @return int|null
     */
    public function getMaxConcurrentExternalSIPRECSessionsThreshold()
    {
        return $this->maxConcurrentExternalSIPRECSessionsThreshold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentExternalSIPRECSessionsThreshold;
    }

    /**
     * Setter for maxConcurrentExternalSIPRECSessionsThreshold
     *
     * @param int|null $maxConcurrentExternalSIPRECSessionsThreshold
     * @return $this
     */
    public function setMaxConcurrentExternalSIPRECSessionsThreshold($maxConcurrentExternalSIPRECSessionsThreshold = null)
    {
        if ($maxConcurrentExternalSIPRECSessionsThreshold === null) {
            $this->maxConcurrentExternalSIPRECSessionsThreshold = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->maxConcurrentExternalSIPRECSessionsThreshold = $maxConcurrentExternalSIPRECSessionsThreshold;
        }
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

