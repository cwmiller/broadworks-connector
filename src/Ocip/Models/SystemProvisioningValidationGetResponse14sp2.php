<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemProvisioningValidationGetResponse14sp2
 *
 * Response to the SystemProvisioningValidationGetRequest14sp2.
 *
 * @see SystemProvisioningValidationGetRequest14sp2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:11483","type":"sequence"}]
 */
class SystemProvisioningValidationGetResponse14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:11483
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName isNetworkServerQueryActive
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:11483
     * @var bool|null
     */
    protected $isNetworkServerQueryActive = null;

    /**
     * @ElementName timeoutSeconds
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:11483
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $timeoutSeconds = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for isNetworkServerQueryActive
     *
     * @return bool
     */
    public function getIsNetworkServerQueryActive()
    {
        return $this->isNetworkServerQueryActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isNetworkServerQueryActive;
    }

    /**
     * Setter for isNetworkServerQueryActive
     *
     * @param bool $isNetworkServerQueryActive
     * @return $this
     */
    public function setIsNetworkServerQueryActive($isNetworkServerQueryActive)
    {
        $this->isNetworkServerQueryActive = $isNetworkServerQueryActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsNetworkServerQueryActive()
    {
        $this->isNetworkServerQueryActive = null;
        return $this;
    }

    /**
     * Getter for timeoutSeconds
     *
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->timeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeoutSeconds;
    }

    /**
     * Setter for timeoutSeconds
     *
     * @param int $timeoutSeconds
     * @return $this
     */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeoutSeconds()
    {
        $this->timeoutSeconds = null;
        return $this;
    }
}

