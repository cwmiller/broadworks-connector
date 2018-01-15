<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationEndpointLockoutClearRequest
 *
 * Request to clear sip authentication endpoint lockouts in the system.
 *          The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSIPAuthenticationEndpointLockoutClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userEndpointKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey[]
     */
    private $userEndpointKey = array(
        
    );

    /**
     * Getter for userEndpointKey
     *
     * @ElementName userEndpointKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey[]
     */
    public function getUserEndpointKey()
    {
        return $this->userEndpointKey;
    }

    /**
     * Setter for userEndpointKey
     *
     * @ElementName userEndpointKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey[] $userEndpointKey
     * @return $this
     */
    public function setUserEndpointKey($userEndpointKey)
    {
        $this->userEndpointKey = $userEndpointKey;
        return $this;
    }

    /**
     * Adder for userEndpointKey
     *
     * @ElementName userEndpointKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey $userEndpointKey
     * @return $this
     */
    public function addUserEndpointKey($userEndpointKey)
    {
        $this->userEndpointKey []= $userEndpointKey;
        return $this;
    }


}

