<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLanguageModifyRequest22
 *
 * Request to modify a language properties in the system.
 *         If the becomeDefaultLanguage element is present, the language in this request becomes
 *         the default language for the system.
 *         The command will fail in Amplify data mode if the locale element is greater than 5 characters in length.   
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11479","type":"sequence"}]
 */
class SystemLanguageModifyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName language
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11479
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName becomeDefaultLanguage
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11479
     * @var bool|null
     */
    private $becomeDefaultLanguage = null;

    /**
     * @ElementName locale
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11479
     * @MaxLength 20
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11479
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $encoding = null;

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

    /**
     * Getter for locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locale;
    }

    /**
     * Setter for locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocale()
    {
        $this->locale = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
        return $this;
    }


}

