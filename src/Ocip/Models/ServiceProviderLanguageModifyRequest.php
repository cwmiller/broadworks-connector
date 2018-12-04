<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLanguageModifyRequest
 *
 * Request to modify a language properties for a service provider/enterprise.
 *         If the becomeDefaultLanguage element is present, the language in this request
 *         Becomes the default language for the service provider/enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:3852","type":"sequence"}]
 */
class ServiceProviderLanguageModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3852
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3852
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName becomeDefaultLanguage
     * @Type bool
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3852
     * @var bool|null
     */
    private $becomeDefaultLanguage = null;

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
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for becomeDefaultLanguage
     *
     * @return bool
     */
    public function getBecomeDefaultLanguage()
    {
        return $this->becomeDefaultLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefaultLanguage;
    }

    /**
     * Setter for becomeDefaultLanguage
     *
     * @param bool $becomeDefaultLanguage
     * @return $this
     */
    public function setBecomeDefaultLanguage($becomeDefaultLanguage)
    {
        $this->becomeDefaultLanguage = $becomeDefaultLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefaultLanguage()
    {
        $this->becomeDefaultLanguage = null;
        return $this;
    }


}

