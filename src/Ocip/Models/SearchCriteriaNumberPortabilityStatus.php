<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaNumberPortabilityStatus
 *
 * Criteria for searching for number portability status.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1802","type":"sequence"}]
 */
class SearchCriteriaNumberPortabilityStatus extends SearchCriteria
{

    /**
     * @ElementName mode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     * @Group f0ada2681ca347fa83b464734259b304:1802
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchMode|null
     */
    private $mode = null;

    /**
     * @ElementName value
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:1802
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $value = null;

    /**
     * @ElementName isCaseInsensitive
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:1802
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

