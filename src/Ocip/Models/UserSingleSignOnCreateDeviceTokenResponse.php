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
     * @Type string
     * @var string|null
     */
    private $deviceToken = null;

    /**
     * Getter for deviceToken
     *
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->deviceToken instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceToken;
    }

    /**
     * Setter for deviceToken
     *
     * @param string $deviceToken
     * @return $this
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceToken()
    {
        $this->deviceToken = null;
        return $this;
    }


}

