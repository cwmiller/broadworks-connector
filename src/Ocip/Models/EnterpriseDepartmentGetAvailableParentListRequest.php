<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentGetAvailableParentListRequest
 *
 * Get a list of enterprise level departments in an enterprise that could be the parent of the
 *         specified department. The department itself and all its decendents are not eligible to be
 *         the parent department.
 *         The response is either EnterpriseDepartmentGetAvailableParentListResponse or ErrorResponse.
 *
 * @see EnterpriseDepartmentGetAvailableParentListResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:330","type":"sequence"}]
 */
class EnterpriseDepartmentGetAvailableParentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enterpriseId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:330
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseId = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:330
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $departmentName = null;

    /**
     * Getter for enterpriseId
     *
     * @return string
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseId;
    }

    /**
     * Setter for enterpriseId
     *
     * @param string $enterpriseId
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseId()
    {
        $this->enterpriseId = null;
        return $this;
    }

    /**
     * Getter for departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @param string $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentName()
    {
        $this->departmentName = null;
        return $this;
    }
}

