<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportCallCenterSelection
 *
 * Either all call centers or list of call centers.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6848","type":"choice"}]
 */
class CallCenterScheduledReportCallCenterSelection
{

    /**
     * @ElementName allCallCenter
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6848
     * @var bool|null
     */
    private $allCallCenter = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Array
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6848
     * @var string[]
     */
    private $serviceUserId = array(
        
    );

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

