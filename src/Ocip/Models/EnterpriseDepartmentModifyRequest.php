<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentModifyRequest
 *
 * Modify a department of an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseDepartmentModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName newDepartmentName
     * @var string|null
     */
    private $newDepartmentName = null;

    /**
     * @ElementName newParentDepartmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    private $newParentDepartmentKey = null;

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
     * Getter for newDepartmentName
     *
     * @ElementName newDepartmentName
     * @return string|null
     */
    public function getNewDepartmentName()
    {
        return $this->newDepartmentName;
    }

    /**
     * Setter for newDepartmentName
     *
     * @ElementName newDepartmentName
     * @param string|null $newDepartmentName
     * @return $this
     */
    public function setNewDepartmentName($newDepartmentName)
    {
        $this->newDepartmentName = $newDepartmentName;
        return $this;
    }

    /**
     * Getter for newParentDepartmentKey
     *
     * @ElementName newParentDepartmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    public function getNewParentDepartmentKey()
    {
        return $this->newParentDepartmentKey;
    }

    /**
     * Setter for newParentDepartmentKey
     *
     * @ElementName newParentDepartmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null $newParentDepartmentKey
     * @return $this
     */
    public function setNewParentDepartmentKey($newParentDepartmentKey)
    {
        $this->newParentDepartmentKey = $newParentDepartmentKey;
        return $this;
    }


}

