<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAuthenticationGetResponse
 *
 * Response to the UserAuthenticationGetRequest.
 *
 * @see UserAuthenticationGetRequest
 */
class UserAuthenticationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userName
     * @Type string
     * @var string|null
     */
    private $userName = null;

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


}

