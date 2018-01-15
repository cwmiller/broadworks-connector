<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse
 *
 * Response to UserEnhancedCallLogsGetListRequest.
 *         Replaced By: UserEnhancedCallLogsGetListResponse14sp4
 */
class UserEnhancedCallLogsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName placed
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    private $placed = array(
        
    );

    /**
     * @ElementName received
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    private $received = array(
        
    );

    /**
     * @ElementName missed
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    private $missed = array(
        
    );

    /**
     * Getter for placed
     *
     * @ElementName placed
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * Setter for placed
     *
     * @ElementName placed
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[] $placed
     * @return $this
     */
    public function setPlaced($placed)
    {
        $this->placed = $placed;
        return $this;
    }

    /**
     * Adder for placed
     *
     * @ElementName placed
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry $placed
     * @return $this
     */
    public function addPlaced($placed)
    {
        $this->placed []= $placed;
        return $this;
    }

    /**
     * Getter for received
     *
     * @ElementName received
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Setter for received
     *
     * @ElementName received
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[] $received
     * @return $this
     */
    public function setReceived($received)
    {
        $this->received = $received;
        return $this;
    }

    /**
     * Adder for received
     *
     * @ElementName received
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry $received
     * @return $this
     */
    public function addReceived($received)
    {
        $this->received []= $received;
        return $this;
    }

    /**
     * Getter for missed
     *
     * @ElementName missed
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[]
     */
    public function getMissed()
    {
        return $this->missed;
    }

    /**
     * Setter for missed
     *
     * @ElementName missed
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry[] $missed
     * @return $this
     */
    public function setMissed($missed)
    {
        $this->missed = $missed;
        return $this;
    }

    /**
     * Adder for missed
     *
     * @ElementName missed
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsEntry $missed
     * @return $this
     */
    public function addMissed($missed)
    {
        $this->missed []= $missed;
        return $this;
    }


}

