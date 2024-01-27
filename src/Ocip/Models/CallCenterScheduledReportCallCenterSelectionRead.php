<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportCallCenterSelectionRead
 *
 * User for admin read. Either all call centers or 2 lists of call centers: one for current and one for deleted call centers.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7621","type":"choice","children":[{"id":"4d65d3449061c568639c8cc1e2492285:7623","type":"sequence"}]}]
 */
class CallCenterScheduledReportCallCenterSelectionRead
{
    /**
     * @ElementName allCallCenter
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7621
     * @var bool|null
     */
    protected $allCallCenter = null;

    /**
     * @ElementName currentUserId
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7623
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $currentUserId = [
        
    ];

    /**
     * @ElementName pastUserId
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7623
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $pastUserId = [
        
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

