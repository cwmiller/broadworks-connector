<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentGetListRequest
 *
 * Request a list of departments in an enterprise. You may request only the
 *         list of departments defined at the enterprise-level, or you may request
 *         the list of all departments in the enterprise including all the departments
 *         defined within the groups inside the enterprise.
 *         The response is either EnterpriseDepartmentGetListResponse or ErrorResponse.
 *
 * @see EnterpriseDepartmentGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:367","type":"sequence"}]
 */
class EnterpriseDepartmentGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enterpriseId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:367
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseId = null;

    /**
     * @ElementName includeGroupDepartments
     * @Type bool
     * @Group 405ec18fe08719ecf74e749d7e18c88f:367
     * @var bool|null
     */
    protected $includeGroupDepartments = null;

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
     * Getter for includeGroupDepartments
     *
     * @return bool
     */
    public function getIncludeGroupDepartments()
    {
        return $this->includeGroupDepartments instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeGroupDepartments;
    }

    /**
     * Setter for includeGroupDepartments
     *
     * @param bool $includeGroupDepartments
     * @return $this
     */
    public function setIncludeGroupDepartments($includeGroupDepartments)
    {
        $this->includeGroupDepartments = $includeGroupDepartments;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeGroupDepartments()
    {
        $this->includeGroupDepartments = null;
        return $this;
    }
}

