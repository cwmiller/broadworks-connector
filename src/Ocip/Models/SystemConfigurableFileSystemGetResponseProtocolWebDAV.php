<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponseProtocolWebDAV
 */
class SystemConfigurableFileSystemGetResponseProtocolWebDAV
{

    /**
     * @ElementName secure
     * @var bool|null
     */
    private $secure = null;

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
     * @ElementName fileServerFQDN
     * @var string|null
     */
    private $fileServerFQDN = null;

    /**
     * Getter for secure
     *
     * @ElementName secure
     * @return bool|null
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Setter for secure
     *
     * @ElementName secure
     * @param bool|null $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
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
     * Getter for fileServerFQDN
     *
     * @ElementName fileServerFQDN
     * @return string|null
     */
    public function getFileServerFQDN()
    {
        return $this->fileServerFQDN;
    }

    /**
     * Setter for fileServerFQDN
     *
     * @ElementName fileServerFQDN
     * @param string|null $fileServerFQDN
     * @return $this
     */
    public function setFileServerFQDN($fileServerFQDN)
    {
        $this->fileServerFQDN = $fileServerFQDN;
        return $this;
    }


}

