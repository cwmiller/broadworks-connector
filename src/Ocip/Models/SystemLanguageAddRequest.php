<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLanguageAddRequest
 *
 * Request to add a language to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemLanguageAddRequest22.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemLanguageAddRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:27386","type":"sequence"}]
 */
class SystemLanguageAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName language
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27386
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27386
     * @MaxLength 5
     * @var string|null
     */
    private $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27386
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

