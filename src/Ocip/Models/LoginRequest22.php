<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginRequest22
 *
 * Request to login to OCI.
 *         password is not required for external authentication login from a trusted host (ACL).
 *         
 *         Replaced by LoginRequest22V2 in AS data mode.
 *
 * @see LoginRequest22V2
 * @Groups [{"id":"bd46fc427b2b0dc182dcd53cf03e95b4:356","type":"sequence"}]
 */
class LoginRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:356
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group bd46fc427b2b0dc182dcd53cf03e95b4:356
     * @var string|null
     */
    private $password = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
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


}

