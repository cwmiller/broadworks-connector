<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFileRepositoryDeviceUserModifyRequest
 *
 * Modify a group file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5685","type":"sequence"}]
 */
class GroupFileRepositoryDeviceUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileRepositoryName = null;

    /**
     * @ElementName userName
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName allowPut
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @var bool|null
     */
    protected $allowPut = null;

    /**
     * @ElementName allowDelete
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @var bool|null
     */
    protected $allowDelete = null;

    /**
     * @ElementName allowGet
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5685
     * @var bool|null
     */
    protected $allowGet = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for fileRepositoryName
     *
     * @return string
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @param string $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryName()
    {
        $this->fileRepositoryName = null;
        return $this;
    }

    /**
     * Getter for userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserName()
    {
        $this->userName = null;
        return $this;
    }

    /**
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for allowPut
     *
     * @return bool
     */
    public function getAllowPut()
    {
        return $this->allowPut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowPut;
    }

    /**
     * Setter for allowPut
     *
     * @param bool $allowPut
     * @return $this
     */
    public function setAllowPut($allowPut)
    {
        $this->allowPut = $allowPut;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowPut()
    {
        $this->allowPut = null;
        return $this;
    }

    /**
     * Getter for allowDelete
     *
     * @return bool
     */
    public function getAllowDelete()
    {
        return $this->allowDelete instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowDelete;
    }

    /**
     * Setter for allowDelete
     *
     * @param bool $allowDelete
     * @return $this
     */
    public function setAllowDelete($allowDelete)
    {
        $this->allowDelete = $allowDelete;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowDelete()
    {
        $this->allowDelete = null;
        return $this;
    }

    /**
     * Getter for allowGet
     *
     * @return bool
     */
    public function getAllowGet()
    {
        return $this->allowGet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowGet;
    }

    /**
     * Setter for allowGet
     *
     * @param bool $allowGet
     * @return $this
     */
    public function setAllowGet($allowGet)
    {
        $this->allowGet = $allowGet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowGet()
    {
        $this->allowGet = null;
        return $this;
    }
}

