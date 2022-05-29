<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupThirdPartyEmergencyCallingGetResponse22
 *
 * Response to the GroupThirdPartyEmergencyCallingGetRequest22.
 *         The response contains the third-party emergency call service settings for the Group.
 *
 * @see GroupThirdPartyEmergencyCallingGetRequest22
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8466","type":"sequence"}]
 */
class GroupThirdPartyEmergencyCallingGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDeviceManagement
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8466
     * @var bool|null
     */
    protected $enableDeviceManagement = null;

    /**
     * @ElementName enableRouting
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8466
     * @var bool|null
     */
    protected $enableRouting = null;

    /**
     * @ElementName customerId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8466
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $customerId = null;

    /**
     * @ElementName secretKey
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8466
     * @MinLength 1
     * @MaxLength 16
     * @var string|null
     */
    protected $secretKey = null;

    /**
     * Getter for enableDeviceManagement
     *
     * @return bool
     */
    public function getEnableDeviceManagement()
    {
        return $this->enableDeviceManagement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDeviceManagement;
    }

    /**
     * Setter for enableDeviceManagement
     *
     * @param bool $enableDeviceManagement
     * @return $this
     */
    public function setEnableDeviceManagement($enableDeviceManagement)
    {
        $this->enableDeviceManagement = $enableDeviceManagement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDeviceManagement()
    {
        $this->enableDeviceManagement = null;
        return $this;
    }

    /**
     * Getter for enableRouting
     *
     * @return bool
     */
    public function getEnableRouting()
    {
        return $this->enableRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRouting;
    }

    /**
     * Setter for enableRouting
     *
     * @param bool $enableRouting
     * @return $this
     */
    public function setEnableRouting($enableRouting)
    {
        $this->enableRouting = $enableRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRouting()
    {
        $this->enableRouting = null;
        return $this;
    }

    /**
     * Getter for customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customerId;
    }

    /**
     * Setter for customerId
     *
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomerId()
    {
        $this->customerId = null;
        return $this;
    }

    /**
     * Getter for secretKey
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secretKey;
    }

    /**
     * Setter for secretKey
     *
     * @param string $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecretKey()
    {
        $this->secretKey = null;
        return $this;
    }


}

