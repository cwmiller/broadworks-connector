<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLanguageAddRequest
 *
 * Request to add a language to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLanguageAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

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

