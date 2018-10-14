<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22NormalLogin
 */
class AuthenticationVerificationRequest22NormalLogin
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName isPasswordHashed
     * @var bool|null
     */
    private $isPasswordHashed = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * Getter for isPasswordHashed
     *
     * @ElementName isPasswordHashed
     * @return bool|null
     */
    public function getIsPasswordHashed()
    {
        return $this->isPasswordHashed;
    }

    /**
     * Setter for isPasswordHashed
     *
     * @ElementName isPasswordHashed
     * @param bool|null $isPasswordHashed
     * @return $this
     */
    public function setIsPasswordHashed($isPasswordHashed)
    {
        $this->isPasswordHashed = $isPasswordHashed;
        return $this;
    }


}

