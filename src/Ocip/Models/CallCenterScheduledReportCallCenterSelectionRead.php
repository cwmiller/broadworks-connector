<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportCallCenterSelectionRead
 *
 * User for admin read. Either all call centers or 2 lists of call centers: one for
 * current and one for deleted call centers.
 */
class CallCenterScheduledReportCallCenterSelectionRead
{

    /**
     * @ElementName allCallCenter
     * @var bool|null
     */
    private $allCallCenter = null;

    /**
     * @ElementName currentUserId
     * @var string[]
     */
    private $currentUserId = array(
        
    );

    /**
     * @ElementName pastUserId
     * @var string[]
     */
    private $pastUserId = array(
        
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
     * Getter for currentUserId
     *
     * @ElementName currentUserId
     * @return string[]
     */
    public function getCurrentUserId()
    {
        return $this->currentUserId;
    }

    /**
     * Setter for currentUserId
     *
     * @ElementName currentUserId
     * @param string[] $currentUserId
     * @return $this
     */
    public function setCurrentUserId($currentUserId)
    {
        $this->currentUserId = $currentUserId;
        return $this;
    }

    /**
     * Adder for currentUserId
     *
     * @ElementName currentUserId
     * @param string $currentUserId
     * @return $this
     */
    public function addCurrentUserId($currentUserId)
    {
        $this->currentUserId []= $currentUserId;
        return $this;
    }

    /**
     * Getter for pastUserId
     *
     * @ElementName pastUserId
     * @return string[]
     */
    public function getPastUserId()
    {
        return $this->pastUserId;
    }

    /**
     * Setter for pastUserId
     *
     * @ElementName pastUserId
     * @param string[] $pastUserId
     * @return $this
     */
    public function setPastUserId($pastUserId)
    {
        $this->pastUserId = $pastUserId;
        return $this;
    }

    /**
     * Adder for pastUserId
     *
     * @ElementName pastUserId
     * @param string $pastUserId
     * @return $this
     */
    public function addPastUserId($pastUserId)
    {
        $this->pastUserId []= $pastUserId;
        return $this;
    }


}

