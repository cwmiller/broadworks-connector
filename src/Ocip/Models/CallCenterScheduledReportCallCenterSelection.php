<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportCallCenterSelection
 *
 * Either all call centers or list of call centers.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7609","type":"choice"}]
 */
class CallCenterScheduledReportCallCenterSelection
{
    /**
     * @ElementName allCallCenter
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7609
     * @var bool|null
     */
    protected $allCallCenter = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Array
     * @Group 4d65d3449061c568639c8cc1e2492285:7609
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $serviceUserId = [
        
    ];

    /**
     * Getter for allCallCenter
     *
     * @return bool
     */
    public function getAllCallCenter()
    {
        return $this->allCallCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allCallCenter;
    }

    /**
     * Setter for allCallCenter
     *
     * @param bool $allCallCenter
     * @return $this
     */
    public function setAllCallCenter($allCallCenter)
    {
        $this->allCallCenter = $allCallCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllCallCenter()
    {
        $this->allCallCenter = null;
        return $this;
    }

    /**
     * Getter for serviceUserId
     *
     * @return string[]
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string[] $serviceUserId
     * @return $this
     */
    public function setServiceUserId(array $serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Adder for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function addServiceUserId(string $serviceUserId)
    {
        $this->serviceUserId[] = $serviceUserId;
        return $this;
    }
}

