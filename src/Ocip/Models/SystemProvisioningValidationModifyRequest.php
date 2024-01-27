<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemProvisioningValidationModifyRequest
 *
 * Request to modify the system's provisioning validation attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           denyMobilityNumberAsRedirectionDestination
 *           denyEnterpriseNumberAsNetworkLocationDestination
 *           denyAutoAttendantIdentityAsAutoAttendantTransferNumber
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14950","type":"sequence"}]
 */
class SystemProvisioningValidationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14950
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName isNetworkServerQueryActive
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14950
     * @var bool|null
     */
    protected $isNetworkServerQueryActive = null;

    /**
     * @ElementName timeoutSeconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14950
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $timeoutSeconds = null;

    /**
     * @ElementName denyMobilityNumberAsRedirectionDestination
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14950
     * @var bool|null
     */
    protected $denyMobilityNumberAsRedirectionDestination = null;

    /**
     * @ElementName denyEnterpriseNumberAsNetworkLocationDestination
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14950
     * @var bool|null
     */
    protected $denyEnterpriseNumberAsNetworkLocationDestination = null;

    /**
     * @ElementName denyAutoAttendantIdentityAsAutoAttendantTransferNumber
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14950
     * @var bool|null
     */
    protected $denyAutoAttendantIdentityAsAutoAttendantTransferNumber = null;

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

    /**
     * Getter for denyAutoAttendantIdentityAsAutoAttendantTransferNumber
     *
     * @return bool
     */
    public function getDenyAutoAttendantIdentityAsAutoAttendantTransferNumber()
    {
        return $this->denyAutoAttendantIdentityAsAutoAttendantTransferNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyAutoAttendantIdentityAsAutoAttendantTransferNumber;
    }

    /**
     * Setter for denyAutoAttendantIdentityAsAutoAttendantTransferNumber
     *
     * @param bool $denyAutoAttendantIdentityAsAutoAttendantTransferNumber
     * @return $this
     */
    public function setDenyAutoAttendantIdentityAsAutoAttendantTransferNumber($denyAutoAttendantIdentityAsAutoAttendantTransferNumber)
    {
        $this->denyAutoAttendantIdentityAsAutoAttendantTransferNumber = $denyAutoAttendantIdentityAsAutoAttendantTransferNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyAutoAttendantIdentityAsAutoAttendantTransferNumber()
    {
        $this->denyAutoAttendantIdentityAsAutoAttendantTransferNumber = null;
        return $this;
    }
}

