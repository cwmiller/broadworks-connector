<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSingleSignOnCreateDeviceTokenResponse
 *
 * Response to UserSingleSignOnCreateDeviceTokenRequest.
 *
 * @see UserSingleSignOnCreateDeviceTokenRequest
 * @Groups [{"id":"21fd3c6abc11c44e52803121f7739a76:610","type":"sequence"}]
 */
class UserSingleSignOnCreateDeviceTokenResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceToken
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:610
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

