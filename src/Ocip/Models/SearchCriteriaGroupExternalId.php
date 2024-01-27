<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaGroupExternalId
 *
 * Criteria for searching by a group's externalId.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1539","type":"sequence"}]
 */
class SearchCriteriaGroupExternalId extends SearchCriteria
{
    /**
     * @ElementName mode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     * @Group 972fbf832439609ec8f2765c5637c3f1:1539
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchMode|null
     */
    protected $mode = null;

    /**
     * @ElementName value
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1539
     * @MaxLength 36
     * @var string|null
     */
    protected $value = null;

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
}

