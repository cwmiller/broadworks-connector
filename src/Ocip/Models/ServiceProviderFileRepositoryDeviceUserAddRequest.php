<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFileRepositoryDeviceUserAddRequest
 *
 * Add a new service provider file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3540","type":"sequence"}]
 */
class ServiceProviderFileRepositoryDeviceUserAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName userName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName allowPut
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var bool|null
     */
    private $allowPut = null;

    /**
     * @ElementName allowDelete
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var bool|null
     */
    private $allowDelete = null;

    /**
     * @ElementName allowGet
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3540
     * @var bool|null
     */
    private $allowGet = null;

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

