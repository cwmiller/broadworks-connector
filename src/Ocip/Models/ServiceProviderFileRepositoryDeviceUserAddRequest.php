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
 */
class ServiceProviderFileRepositoryDeviceUserAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName fileRepositoryName
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName userName
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName allowPut
     * @var bool|null
     */
    private $allowPut = null;

    /**
     * @ElementName allowDelete
     * @var bool|null
     */
    private $allowDelete = null;

    /**
     * @ElementName allowGet
     * @var bool|null
     */
    private $allowGet = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @return string|null
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @param string|null $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * Getter for userName
     *
     * @ElementName userName
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Setter for userName
     *
     * @ElementName userName
     * @param string|null $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Getter for allowPut
     *
     * @ElementName allowPut
     * @return bool|null
     */
    public function getAllowPut()
    {
        return $this->allowPut;
    }

    /**
     * Setter for allowPut
     *
     * @ElementName allowPut
     * @param bool|null $allowPut
     * @return $this
     */
    public function setAllowPut($allowPut)
    {
        $this->allowPut = $allowPut;
        return $this;
    }

    /**
     * Getter for allowDelete
     *
     * @ElementName allowDelete
     * @return bool|null
     */
    public function getAllowDelete()
    {
        return $this->allowDelete;
    }

    /**
     * Setter for allowDelete
     *
     * @ElementName allowDelete
     * @param bool|null $allowDelete
     * @return $this
     */
    public function setAllowDelete($allowDelete)
    {
        $this->allowDelete = $allowDelete;
        return $this;
    }

    /**
     * Getter for allowGet
     *
     * @ElementName allowGet
     * @return bool|null
     */
    public function getAllowGet()
    {
        return $this->allowGet;
    }

    /**
     * Setter for allowGet
     *
     * @ElementName allowGet
     * @param bool|null $allowGet
     * @return $this
     */
    public function setAllowGet($allowGet)
    {
        $this->allowGet = $allowGet;
        return $this;
    }


}

