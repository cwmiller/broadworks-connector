<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLanguageGetListResponse
 *
 * Response to ServiceProviderLanguageGetListRequest.
 *
 * @see ServiceProviderLanguageGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4899","type":"sequence"}]
 */
class ServiceProviderLanguageGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName language
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4899
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $language = [
        
    ];

    /**
     * @ElementName defaultLanguage
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4899
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $defaultLanguage = null;

    /**
     * Getter for language
     *
     * @return string[]
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string[] $language
     * @return $this
     */
    public function setLanguage(array $language)
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
     * Adder for language
     *
     * @param string $language
     * @return $this
     */
    public function addLanguage(string $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * Getter for defaultLanguage
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultLanguage;
    }

    /**
     * Setter for defaultLanguage
     *
     * @param string $defaultLanguage
     * @return $this
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultLanguage()
    {
        $this->defaultLanguage = null;
        return $this;
    }
}

