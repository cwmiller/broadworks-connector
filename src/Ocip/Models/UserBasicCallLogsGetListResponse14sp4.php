<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBasicCallLogsGetListResponse14sp4
 *
 * Response to UserBasicCallLogsGetListRequest14sp4.
 */
class UserBasicCallLogsGetListResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName placed
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[]
     */
    private $placed = array(
        
    );

    /**
     * @ElementName received
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[]
     */
    private $received = array(
        
    );

    /**
     * @ElementName missed
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[]
     */
    private $missed = array(
        
    );

    /**
     * Getter for placed
     *
     * @ElementName placed
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[]
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * Setter for placed
     *
     * @ElementName placed
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[] $placed
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry $placed
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[]
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Setter for received
     *
     * @ElementName received
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[] $received
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry $received
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[]
     */
    public function getMissed()
    {
        return $this->missed;
    }

    /**
     * Setter for missed
     *
     * @ElementName missed
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry[] $missed
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsEntry $missed
     * @return $this
     */
    public function addMissed($missed)
    {
        $this->missed []= $missed;
        return $this;
    }


}

