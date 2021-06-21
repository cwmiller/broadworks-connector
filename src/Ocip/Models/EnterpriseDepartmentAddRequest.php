<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentAddRequest
 *
 * Add a department to enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:633","type":"sequence"}]
 */
class EnterpriseDepartmentAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enterpriseId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:633
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $enterpriseId = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:633
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName parentDepartmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:633
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    private $parentDepartmentKey = null;

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

    /**
     * Getter for parentDepartmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey
     */
    public function getParentDepartmentKey()
    {
        return $this->parentDepartmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->parentDepartmentKey;
    }

    /**
     * Setter for parentDepartmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey $parentDepartmentKey
     * @return $this
     */
    public function setParentDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey $parentDepartmentKey)
    {
        $this->parentDepartmentKey = $parentDepartmentKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetParentDepartmentKey()
    {
        $this->parentDepartmentKey = null;
        return $this;
    }


}

