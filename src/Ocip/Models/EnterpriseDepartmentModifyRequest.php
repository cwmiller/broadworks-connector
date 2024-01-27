<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentModifyRequest
 *
 * Modify a department of an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:401","type":"sequence"}]
 */
class EnterpriseDepartmentModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enterpriseId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:401
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseId = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:401
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $departmentName = null;

    /**
     * @ElementName newDepartmentName
     * @Type string
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:401
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $newDepartmentName = null;

    /**
     * @ElementName newParentDepartmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey
     * @Nillable
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:401
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $newParentDepartmentKey = null;

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
     * Getter for newDepartmentName
     *
     * @return string
     */
    public function getNewDepartmentName()
    {
        return $this->newDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDepartmentName;
    }

    /**
     * Setter for newDepartmentName
     *
     * @param string $newDepartmentName
     * @return $this
     */
    public function setNewDepartmentName($newDepartmentName)
    {
        $this->newDepartmentName = $newDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDepartmentName()
    {
        $this->newDepartmentName = null;
        return $this;
    }

    /**
     * Getter for newParentDepartmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null
     */
    public function getNewParentDepartmentKey()
    {
        return $this->newParentDepartmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newParentDepartmentKey;
    }

    /**
     * Setter for newParentDepartmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey|null $newParentDepartmentKey
     * @return $this
     */
    public function setNewParentDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey $newParentDepartmentKey = null)
    {
        if ($newParentDepartmentKey === null) {
            $this->newParentDepartmentKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->newParentDepartmentKey = $newParentDepartmentKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewParentDepartmentKey()
    {
        $this->newParentDepartmentKey = null;
        return $this;
    }
}

