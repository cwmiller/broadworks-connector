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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName homeZoneIpAddressList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList[]
     */
    private $homeZoneIpAddressList = array(
        
    );

    /**
     * @ElementName homeZoneIpAddressRangeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList[]
     */
    private $homeZoneIpAddressRangeList = array(
        
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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for homeZoneIpAddressList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList[]
     */
    public function getHomeZoneIpAddressList()
    {
        return $this->homeZoneIpAddressList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneIpAddressList;
    }

    /**
     * Setter for homeZoneIpAddressList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList[] $homeZoneIpAddressList
     * @return $this
     */
    public function setHomeZoneIpAddressList(array $homeZoneIpAddressList)
    {
        $this->homeZoneIpAddressList = $homeZoneIpAddressList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneIpAddressList()
    {
        $this->homeZoneIpAddressList = null;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddressList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList $homeZoneIpAddressList
     * @return $this
     */
    public function addHomeZoneIpAddressList($homeZoneIpAddressList)
    {
        $this->homeZoneIpAddressList[] = $homeZoneIpAddressList;
        return $this;
    }

    /**
     * Getter for homeZoneIpAddressRangeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList[]
     */
    public function getHomeZoneIpAddressRangeList()
    {
        return $this->homeZoneIpAddressRangeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneIpAddressRangeList;
    }

    /**
     * Setter for homeZoneIpAddressRangeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList[] $homeZoneIpAddressRangeList
     * @return $this
     */
    public function setHomeZoneIpAddressRangeList(array $homeZoneIpAddressRangeList)
    {
        $this->homeZoneIpAddressRangeList = $homeZoneIpAddressRangeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneIpAddressRangeList()
    {
        $this->homeZoneIpAddressRangeList = null;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddressRangeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressRangeList $homeZoneIpAddressRangeList
     * @return $this
     */
    public function addHomeZoneIpAddressRangeList($homeZoneIpAddressRangeList)
    {
        $this->homeZoneIpAddressRangeList[] = $homeZoneIpAddressRangeList;
        return $this;
    }


}

