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
     * @var int[]
     */
    private $portNumber = array(
        
    );

    /**
     * Getter for portNumber
     *
     * @ElementName portNumber
     * @return int[]
     */
    public function getPortNumber()
    {
        return $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @ElementName portNumber
     * @param int[] $portNumber
     * @return $this
     */
    public function setPortNumber(array $portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * Adder for portNumber
     *
     * @ElementName portNumber
     * @param int $portNumber
     * @return $this
     */
    public function addPortNumber(int $portNumber)
    {
        $this->portNumber []= $portNumber;
        return $this;
    }


}

