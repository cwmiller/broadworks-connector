<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLanguageModifyRequest
 *
 * Request to modify a language properties in the system.
 *         If the becomeDefaultLanguage element is present, the language in this
 * request becomes
 *         the default language for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemLanguageModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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
     * @ElementName locale
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @var string|null
     */
    private $encoding = null;

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

    /**
     * Getter for locale
     *
     * @ElementName locale
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Setter for locale
     *
     * @ElementName locale
     * @param string|null $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @ElementName encoding
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @ElementName encoding
     * @param string|null $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }


}

