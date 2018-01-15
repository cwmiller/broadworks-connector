<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAuthenticationGetResponse
 *
 * Response to the UserAuthenticationGetRequest.
 */
class UserAuthenticationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userName
     * @var string|null
     */
    private $userName = null;

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


}

