<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanTransferNumbersGetResponse
 *
 * Response to UserOutgoingCallingPlanTransferNumbersGetRequest.
 *
 * @see UserOutgoingCallingPlanTransferNumbersGetRequest
 * @Groups [{"id":"80676ea6f2582b1b88573623a6affc0e:1697","type":"sequence"}]
 */
class UserOutgoingCallingPlanTransferNumbersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCustomSettings
     * @Type bool
     * @Group 80676ea6f2582b1b88573623a6affc0e:1697
     * @var bool|null
     */
    private $useCustomSettings = null;

    /**
     * @ElementName userNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers
     * @Group 80676ea6f2582b1b88573623a6affc0e:1697
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
     */
    private $userNumbers = null;

    /**
     * Getter for useCustomSettings
     *
     * @return bool
     */
    public function getUseCustomSettings()
    {
        return $this->useCustomSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomSettings;
    }

    /**
     * Setter for useCustomSettings
     *
     * @param bool $useCustomSettings
     * @return $this
     */
    public function setUseCustomSettings($useCustomSettings)
    {
        $this->useCustomSettings = $useCustomSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomSettings()
    {
        $this->useCustomSettings = null;
        return $this;
    }

    /**
     * Getter for userNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers
     */
    public function getUserNumbers()
    {
        return $this->userNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userNumbers;
    }

    /**
     * Setter for userNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $userNumbers
     * @return $this
     */
    public function setUserNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $userNumbers)
    {
        $this->userNumbers = $userNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserNumbers()
    {
        $this->userNumbers = null;
        return $this;
    }


}

