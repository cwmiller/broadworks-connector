<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaGroupCommonMultiPartPhoneListName
 *
 * Criteria for searching for a multi-value name in a group common phone list.
 *         Note: For this search criterion, the searchMode is always ‘Contains’ and the multi-part search criteria are always AND’ed.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1489","type":"sequence"}]
 */
class SearchCriteriaGroupCommonMultiPartPhoneListName extends SearchCriteria
{
    /**
     * @ElementName value
     * @Type string
     * @Array
     * @Group 972fbf832439609ec8f2765c5637c3f1:1489
     * @MinLength 1
     * @MaxLength 50
     * @var string[]
     */
    protected $value = [
        
    ];

    /**
     * @ElementName isCaseInsensitive
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:1489
     * @var bool|null
     */
    protected $isCaseInsensitive = null;

    /**
     * Getter for value
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string[] $value
     * @return $this
     */
    public function setValue(array $value)
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
     * Adder for value
     *
     * @param string $value
     * @return $this
     */
    public function addValue(string $value)
    {
        $this->value[] = $value;
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

