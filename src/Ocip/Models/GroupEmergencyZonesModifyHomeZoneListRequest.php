<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyHomeZoneListRequest
 *
 * Modify a list of home zones and/or home zone ranges.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupEmergencyZonesModifyHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName homeZoneIpAddressList
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList[]
     */
    private $homeZoneIpAddressList = array(
        
    );

    /**
     * @ElementName homeZoneIpAddressRangeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList[]
     */
    private $homeZoneIpAddressRangeList = array(
        
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
     * Getter for homeZoneIpAddressList
     *
     * @ElementName homeZoneIpAddressList
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList[]
     */
    public function getHomeZoneIpAddressList()
    {
        return $this->homeZoneIpAddressList;
    }

    /**
     * Setter for homeZoneIpAddressList
     *
     * @ElementName homeZoneIpAddressList
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList[] $homeZoneIpAddressList
     * @return $this
     */
    public function setHomeZoneIpAddressList(array $homeZoneIpAddressList)
    {
        $this->homeZoneIpAddressList = $homeZoneIpAddressList;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddressList
     *
     * @ElementName homeZoneIpAddressList
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList $homeZoneIpAddressList
     * @return $this
     */
    public function addHomeZoneIpAddressList($homeZoneIpAddressList)
    {
        $this->homeZoneIpAddressList []= $homeZoneIpAddressList;
        return $this;
    }

    /**
     * Getter for homeZoneIpAddressRangeList
     *
     * @ElementName homeZoneIpAddressRangeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList[]
     */
    public function getHomeZoneIpAddressRangeList()
    {
        return $this->homeZoneIpAddressRangeList;
    }

    /**
     * Setter for homeZoneIpAddressRangeList
     *
     * @ElementName homeZoneIpAddressRangeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList[] $homeZoneIpAddressRangeList
     * @return $this
     */
    public function setHomeZoneIpAddressRangeList(array $homeZoneIpAddressRangeList)
    {
        $this->homeZoneIpAddressRangeList = $homeZoneIpAddressRangeList;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddressRangeList
     *
     * @ElementName homeZoneIpAddressRangeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList $homeZoneIpAddressRangeList
     * @return $this
     */
    public function addHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList)
    {
        $this->homeZoneIpAddressRangeList []= $homeZoneIpAddressRangeList;
        return $this;
    }


}

