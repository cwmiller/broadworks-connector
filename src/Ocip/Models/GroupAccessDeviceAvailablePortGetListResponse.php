<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceAvailablePortGetListResponse
 *
 * Response to GroupAccessDeviceAvailablePortGetListRequest.
 *         Contains a list of available ports in a device using static mode. The
 * list is empty in case the device is using dynamic mode.
 *
 * @see GroupAccessDeviceAvailablePortGetListRequest
 */
class GroupAccessDeviceAvailablePortGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName portNumber
     * @Type int
     * @Array
     * @var int[]
     */
    private $portNumber = array(
        
    );

    /**
     * Getter for portNumber
     *
     * @return int[]
     */
    public function getPortNumber()
    {
        return $this->portNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @param int[] $portNumber
     * @return $this
     */
    public function setPortNumber(array $portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortNumber()
    {
        $this->portNumber = null;
        return $this;
    }

    /**
     * Adder for portNumber
     *
     * @param int $portNumber
     * @return $this
     */
    public function addPortNumber(int $portNumber)
    {
        $this->portNumber[] = $portNumber;
        return $this;
    }


}

