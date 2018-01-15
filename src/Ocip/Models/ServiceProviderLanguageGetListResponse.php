<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLanguageGetListResponse
 *
 * Response to ServiceProviderLanguageGetListRequest.
 */
class ServiceProviderLanguageGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName language
     * @var string[]
     */
    private $language = array(
        
    );

    /**
     * @ElementName defaultLanguage
     * @var string|null
     */
    private $defaultLanguage = null;

    /**
     * Getter for language
     *
     * @ElementName language
     * @return string[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string[] $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adder for language
     *
     * @ElementName language
     * @param string $language
     * @return $this
     */
    public function addLanguage($language)
    {
        $this->language []= $language;
        return $this;
    }

    /**
     * Getter for defaultLanguage
     *
     * @ElementName defaultLanguage
     * @return string|null
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Setter for defaultLanguage
     *
     * @ElementName defaultLanguage
     * @param string|null $defaultLanguage
     * @return $this
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }


}

