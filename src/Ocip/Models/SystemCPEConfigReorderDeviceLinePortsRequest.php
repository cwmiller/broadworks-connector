<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigReorderDeviceLinePortsRequest
 *
 * Reorder the lines of a System device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be
 * obtained
 *         with the SystemAccessDeviceGetRequest16 command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SystemAccessDeviceGetRequest16
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCPEConfigReorderDeviceLinePortsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName orderedLinePortList
     * @var string[]
     */
    private $orderedLinePortList = array(
        
    );

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Getter for orderedLinePortList
     *
     * @ElementName orderedLinePortList
     * @return string[]
     */
    public function getOrderedLinePortList()
    {
        return $this->orderedLinePortList;
    }

    /**
     * Setter for orderedLinePortList
     *
     * @ElementName orderedLinePortList
     * @param string[] $orderedLinePortList
     * @return $this
     */
    public function setOrderedLinePortList($orderedLinePortList)
    {
        $this->orderedLinePortList = $orderedLinePortList;
        return $this;
    }

    /**
     * Adder for orderedLinePortList
     *
     * @ElementName orderedLinePortList
     * @param string $orderedLinePortList
     * @return $this
     */
    public function addOrderedLinePortList($orderedLinePortList)
    {
        $this->orderedLinePortList []= $orderedLinePortList;
        return $this;
    }


}

