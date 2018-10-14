<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanTransferNumbersGetResponse
 *
 * Response to UserOutgoingCallingPlanTransferNumbersGetRequest.
 *
 * @see UserOutgoingCallingPlanTransferNumbersGetRequest
 */
class UserOutgoingCallingPlanTransferNumbersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
     */
    private $userNumbers = null;

    /**
     * Getter for useCustomSettings
     *
     * @ElementName useCustomSettings
     * @return bool|null
     */
    public function getUseCustomSettings()
    {
        return $this->useCustomSettings;
    }

    /**
     * Setter for useCustomSettings
     *
     * @ElementName useCustomSettings
     * @param bool|null $useCustomSettings
     * @return $this
     */
    public function setUseCustomSettings($useCustomSettings)
    {
        $this->useCustomSettings = $useCustomSettings;
        return $this;
    }

    /**
     * Getter for userNumbers
     *
     * @ElementName userNumbers
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
     */
    public function getUserNumbers()
    {
        return $this->userNumbers;
    }

    /**
     * Setter for userNumbers
     *
     * @ElementName userNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null $userNumbers
     * @return $this
     */
    public function setUserNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $userNumbers)
    {
        $this->userNumbers = $userNumbers;
        return $this;
    }


}

