<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBasicCallLogsGetListResponse
 *
 * Response to UserBasicCallLogsGetListRequest.
 *         Replaced By: UserBasicCallLogsGetListResponse14sp4
 *
 * @see UserBasicCallLogsGetListRequest
 * @see UserBasicCallLogsGetListResponse14sp4
 */
class UserBasicCallLogsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName placed
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    private $placed = array(
        
    );

    /**
     * @ElementName received
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    private $received = array(
        
    );

    /**
     * @ElementName missed
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    private $missed = array(
        
    );

    /**
     * Getter for placed
     *
     * @ElementName placed
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * Setter for placed
     *
     * @ElementName placed
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[] $placed
     * @return $this
     */
    public function setPlaced(array $placed)
    {
        $this->placed = $placed;
        return $this;
    }

    /**
     * Adder for placed
     *
     * @ElementName placed
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry $placed
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Setter for received
     *
     * @ElementName received
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[] $received
     * @return $this
     */
    public function setReceived(array $received)
    {
        $this->received = $received;
        return $this;
    }

    /**
     * Adder for received
     *
     * @ElementName received
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry $received
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    public function getMissed()
    {
        return $this->missed;
    }

    /**
     * Setter for missed
     *
     * @ElementName missed
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[] $missed
     * @return $this
     */
    public function setMissed(array $missed)
    {
        $this->missed = $missed;
        return $this;
    }

    /**
     * Adder for missed
     *
     * @ElementName missed
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry $missed
     * @return $this
     */
    public function addMissed($missed)
    {
        $this->missed []= $missed;
        return $this;
    }


}

