<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSingleSignOnCreateDeviceTokenResponse
 *
 * Response to UserSingleSignOnCreateDeviceTokenRequest.
 *
 * @see UserSingleSignOnCreateDeviceTokenRequest
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:732","type":"sequence"}]
 */
class UserSingleSignOnCreateDeviceTokenResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceToken
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:732
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

