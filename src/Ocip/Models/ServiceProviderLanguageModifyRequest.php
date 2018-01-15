<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLanguageModifyRequest
 *
 * Request to modify a language properties for a service provider/enterprise.
 *         If the becomeDefaultLanguage element is present, the language in this
 * request
 *         Becomes the default language for the service provider/enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderLanguageModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName becomeDefaultLanguage
     * @var bool|null
     */
    private $becomeDefaultLanguage = null;

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
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Getter for becomeDefaultLanguage
     *
     * @ElementName becomeDefaultLanguage
     * @return bool|null
     */
    public function getBecomeDefaultLanguage()
    {
        return $this->becomeDefaultLanguage;
    }

    /**
     * Setter for becomeDefaultLanguage
     *
     * @ElementName becomeDefaultLanguage
     * @param bool|null $becomeDefaultLanguage
     * @return $this
     */
    public function setBecomeDefaultLanguage($becomeDefaultLanguage)
    {
        $this->becomeDefaultLanguage = $becomeDefaultLanguage;
        return $this;
    }


}

