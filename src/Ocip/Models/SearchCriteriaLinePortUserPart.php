<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaLinePortUserPart
 *
 * Criteria for searching for device line/port, or SIPURI user part.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:1437","type":"sequence"}]
 */
class SearchCriteriaLinePortUserPart extends SearchCriteria
{

    /**
     * @ElementName mode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:1437
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchMode|null
     */
    private $mode = null;

    /**
     * @ElementName value
     * @Type string
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:1437
     * @var string|null
     */
    private $value = null;

    /**
     * @ElementName isCaseInsensitive
     * @Type bool
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:1437
     * @var bool|null
     */
    private $isCaseInsensitive = null;

    /**
     * Getter for mode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     */
    public function getMode()
    {
        return $this->mode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mode;
    }

    /**
     * Setter for mode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchMode $mode
     * @return $this
     */
    public function setMode(\CWM\BroadWorksConnector\Ocip\Models\SearchMode $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMode()
    {
        $this->mode = null;
        return $this;
    }

    /**
     * Getter for value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }

    /**
     * Getter for isCaseInsensitive
     *
     * @return bool
     */
    public function getIsCaseInsensitive()
    {
        return $this->isCaseInsensitive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCaseInsensitive;
    }

    /**
     * Setter for isCaseInsensitive
     *
     * @param bool $isCaseInsensitive
     * @return $this
     */
    public function setIsCaseInsensitive($isCaseInsensitive)
    {
        $this->isCaseInsensitive = $isCaseInsensitive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCaseInsensitive()
    {
        $this->isCaseInsensitive = null;
        return $this;
    }


}

