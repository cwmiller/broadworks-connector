<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotCallManagerGetResponse
 *
 * Response to UserCommPilotCallManagerGetRequest.
 */
class UserCommPilotCallManagerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName launchOnLogin
     * @var bool|null
     */
    private $launchOnLogin = null;

    /**
     * Getter for launchOnLogin
     *
     * @ElementName launchOnLogin
     * @return bool|null
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin;
    }

    /**
     * Setter for launchOnLogin
     *
     * @ElementName launchOnLogin
     * @param bool|null $launchOnLogin
     * @return $this
     */
    public function setLaunchOnLogin($launchOnLogin)
    {
        $this->launchOnLogin = $launchOnLogin;
        return $this;
    }


}

