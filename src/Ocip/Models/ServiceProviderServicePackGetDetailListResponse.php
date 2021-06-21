<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetDetailListResponse
 *
 * Response to ServiceProviderServicePackGetDetailListRequest. It contains the service pack details
 *         and the list of services in a table format. The column headings are "Service", "Authorized"
 *         "Allocated" and "Available".
 *
 * @see ServiceProviderServicePackGetDetailListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:6128","type":"sequence"}]
 */
class ServiceProviderServicePackGetDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $servicePackName = null;

    /**
     * @ElementName servicePackDescription
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $servicePackDescription = null;

    /**
     * @ElementName isAvailableForUse
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @var bool|null
     */
    private $isAvailableForUse = null;

    /**
     * @ElementName servicePackQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $servicePackQuantity = null;

    /**
     * @ElementName assignedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $assignedQuantity = null;

    /**
     * @ElementName allowedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $allowedQuantity = null;

    /**
     * @ElementName userServiceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6128
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServiceTable = null;

    /**
     * Getter for servicePackName
     *
     * @return string
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }

    /**
     * Getter for servicePackDescription
     *
     * @return string
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackDescription;
    }

    /**
     * Setter for servicePackDescription
     *
     * @param string $servicePackDescription
     * @return $this
     */
    public function setServicePackDescription($servicePackDescription)
    {
        $this->servicePackDescription = $servicePackDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackDescription()
    {
        $this->servicePackDescription = null;
        return $this;
    }

    /**
     * Getter for isAvailableForUse
     *
     * @return bool
     */
    public function getIsAvailableForUse()
    {
        return $this->isAvailableForUse instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAvailableForUse;
    }

    /**
     * Setter for isAvailableForUse
     *
     * @param bool $isAvailableForUse
     * @return $this
     */
    public function setIsAvailableForUse($isAvailableForUse)
    {
        $this->isAvailableForUse = $isAvailableForUse;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAvailableForUse()
    {
        $this->isAvailableForUse = null;
        return $this;
    }

    /**
     * Getter for servicePackQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackQuantity;
    }

    /**
     * Setter for servicePackQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $servicePackQuantity
     * @return $this
     */
    public function setServicePackQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $servicePackQuantity)
    {
        $this->servicePackQuantity = $servicePackQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackQuantity()
    {
        $this->servicePackQuantity = null;
        return $this;
    }

    /**
     * Getter for assignedQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getAssignedQuantity()
    {
        return $this->assignedQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedQuantity;
    }

    /**
     * Setter for assignedQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $assignedQuantity
     * @return $this
     */
    public function setAssignedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $assignedQuantity)
    {
        $this->assignedQuantity = $assignedQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedQuantity()
    {
        $this->assignedQuantity = null;
        return $this;
    }

    /**
     * Getter for allowedQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getAllowedQuantity()
    {
        return $this->allowedQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowedQuantity;
    }

    /**
     * Setter for allowedQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $allowedQuantity
     * @return $this
     */
    public function setAllowedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $allowedQuantity)
    {
        $this->allowedQuantity = $allowedQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowedQuantity()
    {
        $this->allowedQuantity = null;
        return $this;
    }

    /**
     * Getter for userServiceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserServiceTable()
    {
        return $this->userServiceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceTable;
    }

    /**
     * Setter for userServiceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServiceTable
     * @return $this
     */
    public function setUserServiceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServiceTable)
    {
        $this->userServiceTable = $userServiceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceTable()
    {
        $this->userServiceTable = null;
        return $this;
    }


}

