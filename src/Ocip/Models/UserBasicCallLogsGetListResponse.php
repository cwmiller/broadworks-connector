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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:32428","type":"sequence"}]
 */
class UserBasicCallLogsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName placed
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:32428
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    private $placed = array(
        
    );

    /**
     * @ElementName received
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:32428
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    private $received = array(
        
    );

    /**
     * @ElementName missed
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:32428
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    private $missed = array(
        
    );

    /**
     * Getter for placed
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    public function getPlaced()
    {
        return $this->placed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->placed;
    }

    /**
     * Setter for placed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[] $placed
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry $placed
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    public function getReceived()
    {
        return $this->received instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->received;
    }

    /**
     * Setter for received
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[] $received
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry $received
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[]
     */
    public function getMissed()
    {
        return $this->missed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->missed;
    }

    /**
     * Setter for missed
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry[] $missed
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsEntry $missed
     * @return $this
     */
    public function addMissed($missed)
    {
        $this->missed[] = $missed;
        return $this;
    }


}

