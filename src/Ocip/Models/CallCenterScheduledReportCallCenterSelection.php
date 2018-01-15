<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportCallCenterSelection
 *
 * Either all call centers or list of call centers.
 */
class CallCenterScheduledReportCallCenterSelection
{

    /**
     * @ElementName allCallCenter
     * @var bool|null
     */
    private $allCallCenter = null;

    /**
     * @ElementName serviceUserId
     * @var string[]
     */
    private $serviceUserId = array(
        
    );

    /**
     * Getter for allCallCenter
     *
     * @ElementName allCallCenter
     * @return bool|null
     */
    public function getAllCallCenter()
    {
        return $this->allCallCenter;
    }

    /**
     * Setter for allCallCenter
     *
     * @ElementName allCallCenter
     * @param bool|null $allCallCenter
     * @return $this
     */
    public function setAllCallCenter($allCallCenter)
    {
        $this->allCallCenter = $allCallCenter;
        return $this;
    }

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string[]
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string[] $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Adder for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string $serviceUserId
     * @return $this
     */
    public function addServiceUserId($serviceUserId)
    {
        $this->serviceUserId []= $serviceUserId;
        return $this;
    }


}

