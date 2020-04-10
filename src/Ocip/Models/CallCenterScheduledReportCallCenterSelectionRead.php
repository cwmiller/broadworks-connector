<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportCallCenterSelectionRead
 *
 * User for admin read. Either all call centers or 2 lists of call centers: one for current and one for deleted call centers.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7602","type":"choice","children":[{"id":"e2c537e3e39483b96620673a7012ffdd:7604","type":"sequence"}]}]
 */
class CallCenterScheduledReportCallCenterSelectionRead
{

    /**
     * @ElementName allCallCenter
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:7602
     * @var bool|null
     */
    private $allCallCenter = null;

    /**
     * @ElementName currentUserId
     * @Type string
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7604
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $currentUserId = array(
        
    );

    /**
     * @ElementName pastUserId
     * @Type string
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7604
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $pastUserId = array(
        
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
     * Getter for currentUserId
     *
     * @return string[]
     */
    public function getCurrentUserId()
    {
        return $this->currentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->currentUserId;
    }

    /**
     * Setter for currentUserId
     *
     * @param string[] $currentUserId
     * @return $this
     */
    public function setCurrentUserId(array $currentUserId)
    {
        $this->currentUserId = $currentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCurrentUserId()
    {
        $this->currentUserId = null;
        return $this;
    }

    /**
     * Adder for currentUserId
     *
     * @param string $currentUserId
     * @return $this
     */
    public function addCurrentUserId(string $currentUserId)
    {
        $this->currentUserId[] = $currentUserId;
        return $this;
    }

    /**
     * Getter for pastUserId
     *
     * @return string[]
     */
    public function getPastUserId()
    {
        return $this->pastUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pastUserId;
    }

    /**
     * Setter for pastUserId
     *
     * @param string[] $pastUserId
     * @return $this
     */
    public function setPastUserId(array $pastUserId)
    {
        $this->pastUserId = $pastUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPastUserId()
    {
        $this->pastUserId = null;
        return $this;
    }

    /**
     * Adder for pastUserId
     *
     * @param string $pastUserId
     * @return $this
     */
    public function addPastUserId(string $pastUserId)
    {
        $this->pastUserId[] = $pastUserId;
        return $this;
    }


}

