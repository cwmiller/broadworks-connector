<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedUserServiceAuthorizationList
 *
 * A list of user services that replaces a previously authorized user services.
 */
class ReplacementCombinedUserServiceAuthorizationList
{

    /**
     * @ElementName userServiceAuthorization
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization[]
     */
    private $userServiceAuthorization = array(
        
    );

    /**
     * Getter for userServiceAuthorization
     *
     * @ElementName userServiceAuthorization
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization[]
     */
    public function getUserServiceAuthorization()
    {
        return $this->userServiceAuthorization;
    }

    /**
     * Setter for userServiceAuthorization
     *
     * @ElementName userServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization[] $userServiceAuthorization
     * @return $this
     */
    public function setUserServiceAuthorization($userServiceAuthorization)
    {
        $this->userServiceAuthorization = $userServiceAuthorization;
        return $this;
    }

    /**
     * Adder for userServiceAuthorization
     *
     * @ElementName userServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization $userServiceAuthorization
     * @return $this
     */
    public function addUserServiceAuthorization($userServiceAuthorization)
    {
        $this->userServiceAuthorization []= $userServiceAuthorization;
        return $this;
    }


}

