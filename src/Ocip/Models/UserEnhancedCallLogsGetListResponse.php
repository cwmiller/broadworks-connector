<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse
 *
 * Response to UserEnhancedCallLogsGetListRequest.
 *         Replaced By: UserEnhancedCallLogsGetListResponse14sp4
 *
 * @see UserEnhancedCallLogsGetListRequest
 * @see UserEnhancedCallLogsGetListResponse14sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43200","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName placed
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43200
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    protected $placed = [
        
    ];

    /**
     * @ElementName received
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43200
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    protected $received = [
        
    ];

    /**
     * @ElementName missed
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43200
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    protected $missed = [
        
    ];

    /**
     * Getter for placed
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    public function getPlaced()
    {
        return $this->placed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->placed;
    }

    /**
     * Setter for placed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[] $placed
     * @return $this
     */
    public function setPlaced(array $placed)
    {
        $this->placed = $placed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlaced()
    {
        $this->placed = null;
        return $this;
    }

    /**
     * Adder for placed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry $placed
     * @return $this
     */
    public function addPlaced($placed)
    {
        $this->placed[] = $placed;
        return $this;
    }

    /**
     * Getter for received
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    public function getReceived()
    {
        return $this->received instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->received;
    }

    /**
     * Setter for received
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[] $received
     * @return $this
     */
    public function setReceived(array $received)
    {
        $this->received = $received;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReceived()
    {
        $this->received = null;
        return $this;
    }

    /**
     * Adder for received
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry $received
     * @return $this
     */
    public function addReceived($received)
    {
        $this->received[] = $received;
        return $this;
    }

    /**
     * Getter for missed
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    public function getMissed()
    {
        return $this->missed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->missed;
    }

    /**
     * Setter for missed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[] $missed
     * @return $this
     */
    public function setMissed(array $missed)
    {
        $this->missed = $missed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMissed()
    {
        $this->missed = null;
        return $this;
    }

    /**
     * Adder for missed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry $missed
     * @return $this
     */
    public function addMissed($missed)
    {
        $this->missed[] = $missed;
        return $this;
    }
}

