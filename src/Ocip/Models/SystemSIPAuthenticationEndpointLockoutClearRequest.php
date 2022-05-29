<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationEndpointLockoutClearRequest
 *
 * Request to clear sip authentication endpoint lockouts in the system.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16533","type":"sequence"}]
 */
class SystemSIPAuthenticationEndpointLockoutClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userEndpointKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16533
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey[]
     */
    protected $userEndpointKey = array(
        
    );

    /**
     * Getter for userEndpointKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey[]
     */
    public function getUserEndpointKey()
    {
        return $this->userEndpointKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userEndpointKey;
    }

    /**
     * Setter for userEndpointKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey[] $userEndpointKey
     * @return $this
     */
    public function setUserEndpointKey(array $userEndpointKey)
    {
        $this->userEndpointKey = $userEndpointKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserEndpointKey()
    {
        $this->userEndpointKey = null;
        return $this;
    }

    /**
     * Adder for userEndpointKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEndpointKey $userEndpointKey
     * @return $this
     */
    public function addUserEndpointKey($userEndpointKey)
    {
        $this->userEndpointKey[] = $userEndpointKey;
        return $this;
    }


}

