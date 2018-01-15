<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInventoryReportGetRequest
 *
 * Request the group's inventory report.
 *         The response is either a GroupInventoryReportGetResponse or an
 * ErrorResponse.
 */
class GroupInventoryReportGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName includeUsers
     * @var bool|null
     */
    private $includeUsers = null;

    /**
     * @ElementName includeServices
     * @var bool|null
     */
    private $includeServices = null;

    /**
     * @ElementName includeDns
     * @var bool|null
     */
    private $includeDns = null;

    /**
     * @ElementName includeAccessDevices
     * @var bool|null
     */
    private $includeAccessDevices = null;

    /**
     * @ElementName includeDepartments
     * @var bool|null
     */
    private $includeDepartments = null;

    /**
     * @ElementName reportDeliveryEmailAddress
     * @var string|null
     */
    private $reportDeliveryEmailAddress = null;

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
     * Getter for includeUsers
     *
     * @ElementName includeUsers
     * @return bool|null
     */
    public function getIncludeUsers()
    {
        return $this->includeUsers;
    }

    /**
     * Setter for includeUsers
     *
     * @ElementName includeUsers
     * @param bool|null $includeUsers
     * @return $this
     */
    public function setIncludeUsers($includeUsers)
    {
        $this->includeUsers = $includeUsers;
        return $this;
    }

    /**
     * Getter for includeServices
     *
     * @ElementName includeServices
     * @return bool|null
     */
    public function getIncludeServices()
    {
        return $this->includeServices;
    }

    /**
     * Setter for includeServices
     *
     * @ElementName includeServices
     * @param bool|null $includeServices
     * @return $this
     */
    public function setIncludeServices($includeServices)
    {
        $this->includeServices = $includeServices;
        return $this;
    }

    /**
     * Getter for includeDns
     *
     * @ElementName includeDns
     * @return bool|null
     */
    public function getIncludeDns()
    {
        return $this->includeDns;
    }

    /**
     * Setter for includeDns
     *
     * @ElementName includeDns
     * @param bool|null $includeDns
     * @return $this
     */
    public function setIncludeDns($includeDns)
    {
        $this->includeDns = $includeDns;
        return $this;
    }

    /**
     * Getter for includeAccessDevices
     *
     * @ElementName includeAccessDevices
     * @return bool|null
     */
    public function getIncludeAccessDevices()
    {
        return $this->includeAccessDevices;
    }

    /**
     * Setter for includeAccessDevices
     *
     * @ElementName includeAccessDevices
     * @param bool|null $includeAccessDevices
     * @return $this
     */
    public function setIncludeAccessDevices($includeAccessDevices)
    {
        $this->includeAccessDevices = $includeAccessDevices;
        return $this;
    }

    /**
     * Getter for includeDepartments
     *
     * @ElementName includeDepartments
     * @return bool|null
     */
    public function getIncludeDepartments()
    {
        return $this->includeDepartments;
    }

    /**
     * Setter for includeDepartments
     *
     * @ElementName includeDepartments
     * @param bool|null $includeDepartments
     * @return $this
     */
    public function setIncludeDepartments($includeDepartments)
    {
        $this->includeDepartments = $includeDepartments;
        return $this;
    }

    /**
     * Getter for reportDeliveryEmailAddress
     *
     * @ElementName reportDeliveryEmailAddress
     * @return string|null
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress;
    }

    /**
     * Setter for reportDeliveryEmailAddress
     *
     * @ElementName reportDeliveryEmailAddress
     * @param string|null $reportDeliveryEmailAddress
     * @return $this
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $this->reportDeliveryEmailAddress = $reportDeliveryEmailAddress;
        return $this;
    }


}

