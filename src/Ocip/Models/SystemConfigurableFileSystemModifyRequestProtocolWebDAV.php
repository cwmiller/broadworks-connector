<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemModifyRequestProtocolWebDAV
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6036","type":"sequence"}]
 */
class SystemConfigurableFileSystemModifyRequestProtocolWebDAV
{

    /**
     * @ElementName secure
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6036
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName userName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6036
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6036
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $password = null;

    /**
     * @ElementName fileServerFQDN
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6036
     * @var string|null
     */
    private $fileServerFQDN = null;

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
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string|null $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        if ($userName === null) {
            $this->userName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userName = $userName;
        }
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
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        if ($password === null) {
            $this->password = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->password = $password;
        }
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

