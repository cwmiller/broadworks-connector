<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInventoryReportGetRequest
 *
 * Request the group's inventory report.
 *         The response is either a GroupInventoryReportGetResponse or an ErrorResponse.
 *
 * @see GroupInventoryReportGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"5c0fc3a03773b4f430e938115770c82d:42","type":"sequence"}]
 */
class GroupInventoryReportGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName includeUsers
     * @Type bool
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var bool|null
     */
    private $includeUsers = null;

    /**
     * @ElementName includeServices
     * @Type bool
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var bool|null
     */
    private $includeServices = null;

    /**
     * @ElementName includeDns
     * @Type bool
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var bool|null
     */
    private $includeDns = null;

    /**
     * @ElementName includeAccessDevices
     * @Type bool
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var bool|null
     */
    private $includeAccessDevices = null;

    /**
     * @ElementName includeDepartments
     * @Type bool
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var bool|null
     */
    private $includeDepartments = null;

    /**
     * @ElementName reportDeliveryEmailAddress
     * @Type string
     * @Optional
     * @Group 5c0fc3a03773b4f430e938115770c82d:42
     * @var string|null
     */
    private $reportDeliveryEmailAddress = null;

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
     * Getter for includeUsers
     *
     * @return bool
     */
    public function getIncludeUsers()
    {
        return $this->includeUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeUsers;
    }

    /**
     * Setter for includeUsers
     *
     * @param bool $includeUsers
     * @return $this
     */
    public function setIncludeUsers($includeUsers)
    {
        $this->includeUsers = $includeUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeUsers()
    {
        $this->includeUsers = null;
        return $this;
    }

    /**
     * Getter for includeServices
     *
     * @return bool
     */
    public function getIncludeServices()
    {
        return $this->includeServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeServices;
    }

    /**
     * Setter for includeServices
     *
     * @param bool $includeServices
     * @return $this
     */
    public function setIncludeServices($includeServices)
    {
        $this->includeServices = $includeServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeServices()
    {
        $this->includeServices = null;
        return $this;
    }

    /**
     * Getter for includeDns
     *
     * @return bool
     */
    public function getIncludeDns()
    {
        return $this->includeDns instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeDns;
    }

    /**
     * Setter for includeDns
     *
     * @param bool $includeDns
     * @return $this
     */
    public function setIncludeDns($includeDns)
    {
        $this->includeDns = $includeDns;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDns()
    {
        $this->includeDns = null;
        return $this;
    }

    /**
     * Getter for includeAccessDevices
     *
     * @return bool
     */
    public function getIncludeAccessDevices()
    {
        return $this->includeAccessDevices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeAccessDevices;
    }

    /**
     * Setter for includeAccessDevices
     *
     * @param bool $includeAccessDevices
     * @return $this
     */
    public function setIncludeAccessDevices($includeAccessDevices)
    {
        $this->includeAccessDevices = $includeAccessDevices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeAccessDevices()
    {
        $this->includeAccessDevices = null;
        return $this;
    }

    /**
     * Getter for includeDepartments
     *
     * @return bool
     */
    public function getIncludeDepartments()
    {
        return $this->includeDepartments instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeDepartments;
    }

    /**
     * Setter for includeDepartments
     *
     * @param bool $includeDepartments
     * @return $this
     */
    public function setIncludeDepartments($includeDepartments)
    {
        $this->includeDepartments = $includeDepartments;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDepartments()
    {
        $this->includeDepartments = null;
        return $this;
    }

    /**
     * Getter for reportDeliveryEmailAddress
     *
     * @return string
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportDeliveryEmailAddress;
    }

    /**
     * Setter for reportDeliveryEmailAddress
     *
     * @param string $reportDeliveryEmailAddress
     * @return $this
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $this->reportDeliveryEmailAddress = $reportDeliveryEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportDeliveryEmailAddress()
    {
        $this->reportDeliveryEmailAddress = null;
        return $this;
    }


}

