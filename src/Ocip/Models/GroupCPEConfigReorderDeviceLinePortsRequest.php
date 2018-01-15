<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCPEConfigReorderDeviceLinePortsRequest
 *
 * Reorder the lines of a group device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be
 * obtained
 *         with the GroupAccessDeviceGetRequest16 command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCPEConfigReorderDeviceLinePortsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

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
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

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

