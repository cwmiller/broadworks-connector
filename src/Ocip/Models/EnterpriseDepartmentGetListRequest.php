<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentGetListRequest
 *
 * Request a list of departments in an enterprise. You may request only the
 *         list of departments defined at the enterprise-level, or you may request
 *         the list of all departments in the enterprise including all the
 * departments
 *         defined within the groups inside the enterprise.
 *         The response is either EnterpriseDepartmentGetListResponse or
 * ErrorResponse.
 */
class EnterpriseDepartmentGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enterpriseId
     * @var string|null
     */
    private $enterpriseId = null;

    /**
     * @ElementName includeGroupDepartments
     * @var bool|null
     */
    private $includeGroupDepartments = null;

    /**
     * Getter for enterpriseId
     *
     * @ElementName enterpriseId
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId;
    }

    /**
     * Setter for enterpriseId
     *
     * @ElementName enterpriseId
     * @param string|null $enterpriseId
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }

    /**
     * Getter for includeGroupDepartments
     *
     * @ElementName includeGroupDepartments
     * @return bool|null
     */
    public function getIncludeGroupDepartments()
    {
        return $this->includeGroupDepartments;
    }

    /**
     * Setter for includeGroupDepartments
     *
     * @ElementName includeGroupDepartments
     * @param bool|null $includeGroupDepartments
     * @return $this
     */
    public function setIncludeGroupDepartments($includeGroupDepartments)
    {
        $this->includeGroupDepartments = $includeGroupDepartments;
        return $this;
    }


}

