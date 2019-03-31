<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemProvisioningValidationGetResponse22
 *
 * Response to the SystemProvisioningValidationGetRequest22.
 *
 * @see SystemProvisioningValidationGetRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13609","type":"sequence"}]
 */
class SystemProvisioningValidationGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13609
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName isNetworkServerQueryActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13609
     * @var bool|null
     */
    private $isNetworkServerQueryActive = null;

    /**
     * @ElementName timeoutSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13609
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    private $timeoutSeconds = null;

    /**
     * @ElementName denyMobilityNumberAsRedirectionDestination
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13609
     * @var bool|null
     */
    private $denyMobilityNumberAsRedirectionDestination = null;

    /**
     * @ElementName denyEnterpriseNumberAsNetworkLocationDestination
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13609
     * @var bool|null
     */
    private $denyEnterpriseNumberAsNetworkLocationDestination = null;

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

    /**
     * Getter for denyMobilityNumberAsRedirectionDestination
     *
     * @return bool
     */
    public function getDenyMobilityNumberAsRedirectionDestination()
    {
        return $this->denyMobilityNumberAsRedirectionDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyMobilityNumberAsRedirectionDestination;
    }

    /**
     * Setter for denyMobilityNumberAsRedirectionDestination
     *
     * @param bool $denyMobilityNumberAsRedirectionDestination
     * @return $this
     */
    public function setDenyMobilityNumberAsRedirectionDestination($denyMobilityNumberAsRedirectionDestination)
    {
        $this->denyMobilityNumberAsRedirectionDestination = $denyMobilityNumberAsRedirectionDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyMobilityNumberAsRedirectionDestination()
    {
        $this->denyMobilityNumberAsRedirectionDestination = null;
        return $this;
    }

    /**
     * Getter for denyEnterpriseNumberAsNetworkLocationDestination
     *
     * @return bool
     */
    public function getDenyEnterpriseNumberAsNetworkLocationDestination()
    {
        return $this->denyEnterpriseNumberAsNetworkLocationDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyEnterpriseNumberAsNetworkLocationDestination;
    }

    /**
     * Setter for denyEnterpriseNumberAsNetworkLocationDestination
     *
     * @param bool $denyEnterpriseNumberAsNetworkLocationDestination
     * @return $this
     */
    public function setDenyEnterpriseNumberAsNetworkLocationDestination($denyEnterpriseNumberAsNetworkLocationDestination)
    {
        $this->denyEnterpriseNumberAsNetworkLocationDestination = $denyEnterpriseNumberAsNetworkLocationDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyEnterpriseNumberAsNetworkLocationDestination()
    {
        $this->denyEnterpriseNumberAsNetworkLocationDestination = null;
        return $this;
    }


}

