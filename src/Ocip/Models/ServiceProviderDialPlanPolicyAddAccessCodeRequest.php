<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyAddAccessCodeRequest
 *
 * Request to add a Service Provider level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3616","type":"sequence"}]
 */
class ServiceProviderDialPlanPolicyAddAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:3616
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName accessCode
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:3616
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $accessCode = null;

    /**
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:3616
     * @var bool|null
     */
    protected $includeCodeForNetworkTranslationsAndRouting = null;

    /**
     * @ElementName includeCodeForScreeningServices
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:3616
     * @var bool|null
     */
    protected $includeCodeForScreeningServices = null;

    /**
     * @ElementName enableSecondaryDialTone
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:3616
     * @var bool|null
     */
    protected $enableSecondaryDialTone = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3616
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for accessCode
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }

    /**
     * Getter for includeCodeForNetworkTranslationsAndRouting
     *
     * @return bool
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return $this->includeCodeForNetworkTranslationsAndRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * Setter for includeCodeForNetworkTranslationsAndRouting
     *
     * @param bool $includeCodeForNetworkTranslationsAndRouting
     * @return $this
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = $includeCodeForNetworkTranslationsAndRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCodeForNetworkTranslationsAndRouting()
    {
        $this->includeCodeForNetworkTranslationsAndRouting = null;
        return $this;
    }

    /**
     * Getter for includeCodeForScreeningServices
     *
     * @return bool
     */
    public function getIncludeCodeForScreeningServices()
    {
        return $this->includeCodeForScreeningServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCodeForScreeningServices;
    }

    /**
     * Setter for includeCodeForScreeningServices
     *
     * @param bool $includeCodeForScreeningServices
     * @return $this
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices)
    {
        $this->includeCodeForScreeningServices = $includeCodeForScreeningServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCodeForScreeningServices()
    {
        $this->includeCodeForScreeningServices = null;
        return $this;
    }

    /**
     * Getter for enableSecondaryDialTone
     *
     * @return bool
     */
    public function getEnableSecondaryDialTone()
    {
        return $this->enableSecondaryDialTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSecondaryDialTone;
    }

    /**
     * Setter for enableSecondaryDialTone
     *
     * @param bool $enableSecondaryDialTone
     * @return $this
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone)
    {
        $this->enableSecondaryDialTone = $enableSecondaryDialTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSecondaryDialTone()
    {
        $this->enableSecondaryDialTone = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

