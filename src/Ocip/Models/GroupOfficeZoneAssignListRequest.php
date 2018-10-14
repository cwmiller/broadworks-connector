<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOfficeZoneAssignListRequest
 *
 * Assign a list of Office Zones to a group.
 *         The Element defaultOfficeZone is required only for the first assignment,
 * for subsequent assignments it is optional.
 *         Office Zones can only be assigned if the Location-Based Calling
 * Restrictions has been authorized to the group otherwise the request will fail.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupOfficeZoneAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName officeZoneName
     * @var string[]
     */
    private $officeZoneName = array(
        
    );

    /**
     * @ElementName defaultOfficeZoneName
     * @var string|null
     */
    private $defaultOfficeZoneName = null;

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
     * Getter for officeZoneName
     *
     * @ElementName officeZoneName
     * @return string[]
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string[] $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName(array $officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * Adder for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string $officeZoneName
     * @return $this
     */
    public function addOfficeZoneName(string $officeZoneName)
    {
        $this->officeZoneName []= $officeZoneName;
        return $this;
    }

    /**
     * Getter for defaultOfficeZoneName
     *
     * @ElementName defaultOfficeZoneName
     * @return string|null
     */
    public function getDefaultOfficeZoneName()
    {
        return $this->defaultOfficeZoneName;
    }

    /**
     * Setter for defaultOfficeZoneName
     *
     * @ElementName defaultOfficeZoneName
     * @param string|null $defaultOfficeZoneName
     * @return $this
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName)
    {
        $this->defaultOfficeZoneName = $defaultOfficeZoneName;
        return $this;
    }


}

