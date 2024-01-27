<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigReorderDeviceLinePortsRequest
 *
 * Reorder the lines of a System device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be obtained
 *         with the SystemAccessDeviceGetRequest16 command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SystemAccessDeviceGetRequest16
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7282","type":"sequence"}]
 */
class SystemCPEConfigReorderDeviceLinePortsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:7282
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName orderedLinePortList
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:7282
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $orderedLinePortList = [
        
    ];

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for orderedLinePortList
     *
     * @return string[]
     */
    public function getOrderedLinePortList()
    {
        return $this->orderedLinePortList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedLinePortList;
    }

    /**
     * Setter for orderedLinePortList
     *
     * @param string[] $orderedLinePortList
     * @return $this
     */
    public function setOrderedLinePortList(array $orderedLinePortList)
    {
        $this->orderedLinePortList = $orderedLinePortList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderedLinePortList()
    {
        $this->orderedLinePortList = null;
        return $this;
    }

    /**
     * Adder for orderedLinePortList
     *
     * @param string $orderedLinePortList
     * @return $this
     */
    public function addOrderedLinePortList(string $orderedLinePortList)
    {
        $this->orderedLinePortList[] = $orderedLinePortList;
        return $this;
    }
}

