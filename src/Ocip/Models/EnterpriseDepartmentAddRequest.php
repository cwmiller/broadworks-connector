<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentAddRequest
 *
 * Add a department to enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseDepartmentAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enterpriseId
     * @var string|null
     */
    private $enterpriseId = null;

    /**
     * @ElementName departmentName
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName parentDepartmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    private $parentDepartmentKey = null;

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
     * Getter for departmentName
     *
     * @ElementName departmentName
     * @return string|null
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @ElementName departmentName
     * @param string|null $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * Getter for parentDepartmentKey
     *
     * @ElementName parentDepartmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    public function getParentDepartmentKey()
    {
        return $this->parentDepartmentKey;
    }

    /**
     * Setter for parentDepartmentKey
     *
     * @ElementName parentDepartmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null $parentDepartmentKey
     * @return $this
     */
    public function setParentDepartmentKey($parentDepartmentKey)
    {
        $this->parentDepartmentKey = $parentDepartmentKey;
        return $this;
    }


}

