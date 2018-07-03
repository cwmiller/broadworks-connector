<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSingleSignOnCreateDeviceTokenResponse
 *
 * Response to UserSingleSignOnCreateDeviceTokenRequest.
 *
 * @see UserSingleSignOnCreateDeviceTokenRequest
 */
class UserSingleSignOnCreateDeviceTokenResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceToken
     * @var string|null
     */
    private $deviceToken = null;

    /**
     * Getter for deviceToken
     *
     * @ElementName deviceToken
     * @return string|null
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * Setter for deviceToken
     *
     * @ElementName deviceToken
     * @param string|null $deviceToken
     * @return $this
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
        return $this;
    }


}

