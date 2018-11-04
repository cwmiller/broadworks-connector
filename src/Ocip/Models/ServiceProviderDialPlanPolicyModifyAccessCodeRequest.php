<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyModifyAccessCodeRequest
 *
 * Request to modify a Service Provider level Dial Plan Access Code and its
 * attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderDialPlanPolicyModifyAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName accessCode
     * @var string|null
     */
    private $accessCode = null;

    /**
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @var bool|null
     */
    private $includeCodeForNetworkTranslationsAndRouting = null;

    /**
     * @ElementName includeCodeForScreeningServices
     * @var bool|null
     */
    private $includeCodeForScreeningServices = null;

    /**
     * @ElementName enableSecondaryDialTone
     * @var bool|null
     */
    private $enableSecondaryDialTone = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for accessCode
     *
     * @ElementName accessCode
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @ElementName accessCode
     * @param string|null $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * Getter for includeCodeForNetworkTranslationsAndRouting
     *
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @return bool|null
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return $this->includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * Setter for includeCodeForNetworkTranslationsAndRouting
     *
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @param bool|null $includeCodeForNetworkTranslationsAndRouting
     * @return $this
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = $includeCodeForNetworkTranslationsAndRouting;
        return $this;
    }

    /**
     * Getter for includeCodeForScreeningServices
     *
     * @ElementName includeCodeForScreeningServices
     * @return bool|null
     */
    public function getIncludeCodeForScreeningServices()
    {
        return $this->includeCodeForScreeningServices;
    }

    /**
     * Setter for includeCodeForScreeningServices
     *
     * @ElementName includeCodeForScreeningServices
     * @param bool|null $includeCodeForScreeningServices
     * @return $this
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices)
    {
        $this->includeCodeForScreeningServices = $includeCodeForScreeningServices;
        return $this;
    }

    /**
     * Getter for enableSecondaryDialTone
     *
     * @ElementName enableSecondaryDialTone
     * @return bool|null
     */
    public function getEnableSecondaryDialTone()
    {
        return $this->enableSecondaryDialTone;
    }

    /**
     * Setter for enableSecondaryDialTone
     *
     * @ElementName enableSecondaryDialTone
     * @param bool|null $enableSecondaryDialTone
     * @return $this
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone)
    {
        $this->enableSecondaryDialTone = $enableSecondaryDialTone;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

