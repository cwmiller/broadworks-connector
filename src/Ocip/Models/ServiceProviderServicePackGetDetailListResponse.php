<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetDetailListResponse
 *
 * Response to ServiceProviderServicePackGetDetailListRequest. It contains the
 * service pack details
 *         and the list of services in a table format. The column headings are
 * "Service", "Authorized"
 *         "Allocated" and "Available".
 *
 * @see ServiceProviderServicePackGetDetailListRequest
 */
class ServiceProviderServicePackGetDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePackName
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName servicePackDescription
     * @var string|null
     */
    private $servicePackDescription = null;

    /**
     * @ElementName isAvailableForUse
     * @var bool|null
     */
    private $isAvailableForUse = null;

    /**
     * @ElementName servicePackQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $servicePackQuantity = null;

    /**
     * @ElementName assignedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $assignedQuantity = null;

    /**
     * @ElementName allowedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $allowedQuantity = null;

    /**
     * @ElementName userServiceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServiceTable = null;

    /**
     * Getter for servicePackName
     *
     * @ElementName servicePackName
     * @return string|null
     */
    public function getServicePackName()
    {
        return $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @ElementName servicePackName
     * @param string|null $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * Getter for servicePackDescription
     *
     * @ElementName servicePackDescription
     * @return string|null
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription;
    }

    /**
     * Setter for servicePackDescription
     *
     * @ElementName servicePackDescription
     * @param string|null $servicePackDescription
     * @return $this
     */
    public function setServicePackDescription($servicePackDescription)
    {
        $this->servicePackDescription = $servicePackDescription;
        return $this;
    }

    /**
     * Getter for isAvailableForUse
     *
     * @ElementName isAvailableForUse
     * @return bool|null
     */
    public function getIsAvailableForUse()
    {
        return $this->isAvailableForUse;
    }

    /**
     * Setter for isAvailableForUse
     *
     * @ElementName isAvailableForUse
     * @param bool|null $isAvailableForUse
     * @return $this
     */
    public function setIsAvailableForUse($isAvailableForUse)
    {
        $this->isAvailableForUse = $isAvailableForUse;
        return $this;
    }

    /**
     * Getter for servicePackQuantity
     *
     * @ElementName servicePackQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity;
    }

    /**
     * Setter for servicePackQuantity
     *
     * @ElementName servicePackQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $servicePackQuantity
     * @return $this
     */
    public function setServicePackQuantity($servicePackQuantity)
    {
        $this->servicePackQuantity = $servicePackQuantity;
        return $this;
    }

    /**
     * Getter for assignedQuantity
     *
     * @ElementName assignedQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    public function getAssignedQuantity()
    {
        return $this->assignedQuantity;
    }

    /**
     * Setter for assignedQuantity
     *
     * @ElementName assignedQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null $assignedQuantity
     * @return $this
     */
    public function setAssignedQuantity($assignedQuantity)
    {
        $this->assignedQuantity = $assignedQuantity;
        return $this;
    }

    /**
     * Getter for allowedQuantity
     *
     * @ElementName allowedQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getAllowedQuantity()
    {
        return $this->allowedQuantity;
    }

    /**
     * Setter for allowedQuantity
     *
     * @ElementName allowedQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $allowedQuantity
     * @return $this
     */
    public function setAllowedQuantity($allowedQuantity)
    {
        $this->allowedQuantity = $allowedQuantity;
        return $this;
    }

    /**
     * Getter for userServiceTable
     *
     * @ElementName userServiceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserServiceTable()
    {
        return $this->userServiceTable;
    }

    /**
     * Setter for userServiceTable
     *
     * @ElementName userServiceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userServiceTable
     * @return $this
     */
    public function setUserServiceTable($userServiceTable)
    {
        $this->userServiceTable = $userServiceTable;
        return $this;
    }


}

