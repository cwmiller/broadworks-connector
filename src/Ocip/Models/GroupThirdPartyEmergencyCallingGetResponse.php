<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupThirdPartyEmergencyCallingGetResponse
 *
 * Response to the GroupThirdPartyEmergencyCallingGetRequest.
 *         The response contains the third-party emergency call service settings for the Group.
 *
 * @see GroupThirdPartyEmergencyCallingGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8432","type":"sequence"}]
 */
class GroupThirdPartyEmergencyCallingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDeviceManagement
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8432
     * @var bool|null
     */
    protected $enableDeviceManagement = null;

    /**
     * @ElementName enableRouting
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8432
     * @var bool|null
     */
    protected $enableRouting = null;

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


}

