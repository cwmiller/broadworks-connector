<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLanguageGetListResponse
 *
 * Response to SystemLanguageGetListRequest.
 *         The language table column headings are: "Language", "Locale" and
 * "Encoding".
 *
 * @see SystemLanguageGetListRequest
 */
class SystemLanguageGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultLanguage
     * @Type string
     * @var string|null
     */
    private $defaultLanguage = null;

    /**
     * @ElementName languageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $languageTable = null;

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

    /**
     * Getter for languageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLanguageTable()
    {
        return $this->languageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->languageTable;
    }

    /**
     * Setter for languageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $languageTable
     * @return $this
     */
    public function setLanguageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $languageTable)
    {
        $this->languageTable = $languageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguageTable()
    {
        $this->languageTable = null;
        return $this;
    }


}

