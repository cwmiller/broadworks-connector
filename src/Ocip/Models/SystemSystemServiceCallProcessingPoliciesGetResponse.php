<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceCallProcessingPoliciesGetResponse
 *
 * Response to SystemSystemServiceCallProcessingPoliciesGetRequest.
 *
 * @see SystemSystemServiceCallProcessingPoliciesGetRequest
 */
class SystemSystemServiceCallProcessingPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useMaxSimultaneousCalls
     * @var bool|null
     */
    private $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @var int|null
     */
    private $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @var bool|null
     */
    private $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @var int|null
     */
    private $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @var bool|null
     */
    private $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @var int|null
     */
    private $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @var bool|null
     */
    private $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @var int|null
     */
    private $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * Getter for useMaxSimultaneousCalls
     *
     * @ElementName useMaxSimultaneousCalls
     * @return bool|null
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls;
    }

    /**
     * Setter for useMaxSimultaneousCalls
     *
     * @ElementName useMaxSimultaneousCalls
     * @param bool|null $useMaxSimultaneousCalls
     * @return $this
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $this->useMaxSimultaneousCalls = $useMaxSimultaneousCalls;
        return $this;
    }

    /**
     * Getter for maxSimultaneousCalls
     *
     * @ElementName maxSimultaneousCalls
     * @return int|null
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls;
    }

    /**
     * Setter for maxSimultaneousCalls
     *
     * @ElementName maxSimultaneousCalls
     * @param int|null $maxSimultaneousCalls
     * @return $this
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $this->maxSimultaneousCalls = $maxSimultaneousCalls;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousVideoCalls
     *
     * @ElementName useMaxSimultaneousVideoCalls
     * @return bool|null
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls;
    }

    /**
     * Setter for useMaxSimultaneousVideoCalls
     *
     * @ElementName useMaxSimultaneousVideoCalls
     * @param bool|null $useMaxSimultaneousVideoCalls
     * @return $this
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $this->useMaxSimultaneousVideoCalls = $useMaxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * Getter for maxSimultaneousVideoCalls
     *
     * @ElementName maxSimultaneousVideoCalls
     * @return int|null
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls;
    }

    /**
     * Setter for maxSimultaneousVideoCalls
     *
     * @ElementName maxSimultaneousVideoCalls
     * @param int|null $maxSimultaneousVideoCalls
     * @return $this
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $this->maxSimultaneousVideoCalls = $maxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentRedirectedCalls
     *
     * @ElementName useMaxConcurrentRedirectedCalls
     * @return bool|null
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls;
    }

    /**
     * Setter for useMaxConcurrentRedirectedCalls
     *
     * @ElementName useMaxConcurrentRedirectedCalls
     * @param bool|null $useMaxConcurrentRedirectedCalls
     * @return $this
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $this->useMaxConcurrentRedirectedCalls = $useMaxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * Getter for maxConcurrentRedirectedCalls
     *
     * @ElementName maxConcurrentRedirectedCalls
     * @return int|null
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls;
    }

    /**
     * Setter for maxConcurrentRedirectedCalls
     *
     * @ElementName maxConcurrentRedirectedCalls
     * @param int|null $maxConcurrentRedirectedCalls
     * @return $this
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $this->maxConcurrentRedirectedCalls = $maxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForAnsweredCalls
     *
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @return bool|null
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForAnsweredCalls
     *
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @param bool|null $useMaxCallTimeForAnsweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $this->useMaxCallTimeForAnsweredCalls = $useMaxCallTimeForAnsweredCalls;
        return $this;
    }

    /**
     * Getter for maxCallTimeForAnsweredCallsMinutes
     *
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @return int|null
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForAnsweredCallsMinutes
     *
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @param int|null $maxCallTimeForAnsweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = $maxCallTimeForAnsweredCallsMinutes;
        return $this;
    }


}

