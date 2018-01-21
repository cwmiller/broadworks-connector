<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemProvisioningValidationModifyRequest
 *
 * Request to modify the system's provisioning validation attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
 *           denyMobilityNumberAsRedirectionDestination
 *           denyEnterpriseNumberAsNetworkLocationDestination
 */
class SystemProvisioningValidationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName denyMobilityNumberAsRedirectionDestination
     * @var bool|null
     */
    private $denyMobilityNumberAsRedirectionDestination = null;

    /**
     * @ElementName denyEnterpriseNumberAsNetworkLocationDestination
     * @var bool|null
     */
    private $denyEnterpriseNumberAsNetworkLocationDestination = null;

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

    /**
     * Getter for denyMobilityNumberAsRedirectionDestination
     *
     * @ElementName denyMobilityNumberAsRedirectionDestination
     * @return bool|null
     */
    public function getDenyMobilityNumberAsRedirectionDestination()
    {
        return $this->denyMobilityNumberAsRedirectionDestination;
    }

    /**
     * Setter for denyMobilityNumberAsRedirectionDestination
     *
     * @ElementName denyMobilityNumberAsRedirectionDestination
     * @param bool|null $denyMobilityNumberAsRedirectionDestination
     * @return $this
     */
    public function setDenyMobilityNumberAsRedirectionDestination($denyMobilityNumberAsRedirectionDestination)
    {
        $this->denyMobilityNumberAsRedirectionDestination = $denyMobilityNumberAsRedirectionDestination;
        return $this;
    }

    /**
     * Getter for denyEnterpriseNumberAsNetworkLocationDestination
     *
     * @ElementName denyEnterpriseNumberAsNetworkLocationDestination
     * @return bool|null
     */
    public function getDenyEnterpriseNumberAsNetworkLocationDestination()
    {
        return $this->denyEnterpriseNumberAsNetworkLocationDestination;
    }

    /**
     * Setter for denyEnterpriseNumberAsNetworkLocationDestination
     *
     * @ElementName denyEnterpriseNumberAsNetworkLocationDestination
     * @param bool|null $denyEnterpriseNumberAsNetworkLocationDestination
     * @return $this
     */
    public function setDenyEnterpriseNumberAsNetworkLocationDestination($denyEnterpriseNumberAsNetworkLocationDestination)
    {
        $this->denyEnterpriseNumberAsNetworkLocationDestination = $denyEnterpriseNumberAsNetworkLocationDestination;
        return $this;
    }


}

