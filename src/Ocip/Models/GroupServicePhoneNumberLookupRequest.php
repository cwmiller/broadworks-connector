<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServicePhoneNumberLookupRequest
 *
 * Lookup if the given number is defined in the specified service in the group.
 *         The response is GroupServicePhoneNumberLookupResponse.
 *
 * @see GroupServicePhoneNumberLookupResponse
 */
class GroupServicePhoneNumberLookupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName serviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null
     */
    private $serviceType = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

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
     * Getter for serviceType
     *
     * @ElementName serviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Setter for serviceType
     *
     * @ElementName serviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType|null $serviceType
     * @return $this
     */
    public function setServiceType(\CWM\BroadWorksConnector\Ocip\Models\NumberLookupServiceType $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

