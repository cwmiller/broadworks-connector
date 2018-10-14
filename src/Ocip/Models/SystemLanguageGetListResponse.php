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
     * @var string|null
     */
    private $defaultLanguage = null;

    /**
     * @ElementName languageTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $languageTable = null;

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

    /**
     * Getter for languageTable
     *
     * @ElementName languageTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLanguageTable()
    {
        return $this->languageTable;
    }

    /**
     * Setter for languageTable
     *
     * @ElementName languageTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $languageTable
     * @return $this
     */
    public function setLanguageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $languageTable)
    {
        $this->languageTable = $languageTable;
        return $this;
    }


}

