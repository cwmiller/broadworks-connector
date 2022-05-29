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
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4839","type":"sequence"}]
 */
class ServiceProviderLanguageModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4839
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName language
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4839
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName becomeDefaultLanguage
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4839
     * @var bool|null
     */
    protected $becomeDefaultLanguage = null;

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

