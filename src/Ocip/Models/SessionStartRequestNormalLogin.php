<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SessionStartRequestNormalLogin
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5996","type":"sequence"}]
 */
class SessionStartRequestNormalLogin
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5996
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5996
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

