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
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:293","type":"sequence"}]
 */
class EnterpriseDepartmentAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enterpriseId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:293
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseId = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:293
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $departmentName = null;

    /**
     * @ElementName parentDepartmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:293
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    protected $parentDepartmentKey = null;

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

