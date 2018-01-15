<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemProvisioningValidationGetResponse14sp2
 *
 * Response to the SystemProvisioningValidationGetRequest14sp2.
 */
class SystemProvisioningValidationGetResponse14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName isNetworkServerQueryActive
     * @var bool|null
     */
    private $isNetworkServerQueryActive = null;

    /**
     * @ElementName timeoutSeconds
     * @var int|null
     */
    private $timeoutSeconds = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for isNetworkServerQueryActive
     *
     * @ElementName isNetworkServerQueryActive
     * @return bool|null
     */
    public function getIsNetworkServerQueryActive()
    {
        return $this->isNetworkServerQueryActive;
    }

    /**
     * Setter for isNetworkServerQueryActive
     *
     * @ElementName isNetworkServerQueryActive
     * @param bool|null $isNetworkServerQueryActive
     * @return $this
     */
    public function setIsNetworkServerQueryActive($isNetworkServerQueryActive)
    {
        $this->isNetworkServerQueryActive = $isNetworkServerQueryActive;
        return $this;
    }

    /**
     * Getter for timeoutSeconds
     *
     * @ElementName timeoutSeconds
     * @return int|null
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds;
    }

    /**
     * Setter for timeoutSeconds
     *
     * @ElementName timeoutSeconds
     * @param int|null $timeoutSeconds
     * @return $this
     */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;
        return $this;
    }


}

