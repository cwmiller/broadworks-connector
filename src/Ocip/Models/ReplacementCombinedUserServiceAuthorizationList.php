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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization[]
     */
    private $userServiceAuthorization = array(
        
    );

    /**
     * Getter for userServiceAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization[]
     */
    public function getUserServiceAuthorization()
    {
        return $this->userServiceAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceAuthorization;
    }

    /**
     * Setter for userServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization[] $userServiceAuthorization
     * @return $this
     */
    public function setUserServiceAuthorization(array $userServiceAuthorization)
    {
        $this->userServiceAuthorization = $userServiceAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceAuthorization()
    {
        $this->userServiceAuthorization = null;
        return $this;
    }

    /**
     * Adder for userServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedUserServiceAuthorization $userServiceAuthorization
     * @return $this
     */
    public function addUserServiceAuthorization($userServiceAuthorization)
    {
        $this->userServiceAuthorization[] = $userServiceAuthorization;
        return $this;
    }


}

