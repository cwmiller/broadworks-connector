<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse22ProtocolWebDAV
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7854","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponse22ProtocolWebDAV
{

    /**
     * @ElementName secure
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7854
     * @var bool|null
     */
    protected $secure = null;

    /**
     * @ElementName userName
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7854
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7854
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName fileServerFQDN
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7854
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $fileServerFQDN = null;

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
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
     * Getter for fileServerFQDN
     *
     * @return string
     */
    public function getFileServerFQDN()
    {
        return $this->fileServerFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileServerFQDN;
    }

    /**
     * Setter for fileServerFQDN
     *
     * @param string $fileServerFQDN
     * @return $this
     */
    public function setFileServerFQDN($fileServerFQDN)
    {
        $this->fileServerFQDN = $fileServerFQDN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileServerFQDN()
    {
        $this->fileServerFQDN = null;
        return $this;
    }


}

