<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCPEConfigReorderDeviceLinePortsRequest
 *
 * Reorder the lines of a Service Provider device. You can not add or delete line
 * ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be
 * obtained
 *         with the ServiceProviderAccessDeviceGetRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see ServiceProviderAccessDeviceGetRequest
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderCPEConfigReorderDeviceLinePortsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName orderedLinePortList
     * @Type string
     * @Array
     * @var string[]
     */
    private $orderedLinePortList = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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

