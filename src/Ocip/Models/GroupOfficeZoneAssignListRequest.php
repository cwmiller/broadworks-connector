<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOfficeZoneAssignListRequest
 *
 * Assign a list of Office Zones to a group.
 *         The Element defaultOfficeZone is required only for the first assignment, for subsequent assignments it is optional.
 *         Office Zones can only be assigned if the Location-Based Calling Restrictions has been authorized to the group otherwise the request will fail.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6674","type":"sequence"}]
 */
class GroupOfficeZoneAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6674
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6674
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName officeZoneName
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6674
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $officeZoneName = array(
        
    );

    /**
     * @ElementName defaultOfficeZoneName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6674
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $defaultOfficeZoneName = null;

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
     * Getter for officeZoneName
     *
     * @return string[]
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @param string[] $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName(array $officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneName()
    {
        $this->officeZoneName = null;
        return $this;
    }

    /**
     * Adder for officeZoneName
     *
     * @param string $officeZoneName
     * @return $this
     */
    public function addOfficeZoneName(string $officeZoneName)
    {
        $this->officeZoneName[] = $officeZoneName;
        return $this;
    }

    /**
     * Getter for defaultOfficeZoneName
     *
     * @return string
     */
    public function getDefaultOfficeZoneName()
    {
        return $this->defaultOfficeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultOfficeZoneName;
    }

    /**
     * Setter for defaultOfficeZoneName
     *
     * @param string $defaultOfficeZoneName
     * @return $this
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName)
    {
        $this->defaultOfficeZoneName = $defaultOfficeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultOfficeZoneName()
    {
        $this->defaultOfficeZoneName = null;
        return $this;
    }


}

