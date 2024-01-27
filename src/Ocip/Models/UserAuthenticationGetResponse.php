<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAuthenticationGetResponse
 *
 * Response to the UserAuthenticationGetRequest.
 *
 * @see UserAuthenticationGetRequest
 * @Groups [{"id":"6e41c53467939072d1190f1f854fdccd:56","type":"sequence"}]
 */
class UserAuthenticationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userName
     * @Type string
     * @Optional
     * @Group 6e41c53467939072d1190f1f854fdccd:56
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $userName = null;

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

