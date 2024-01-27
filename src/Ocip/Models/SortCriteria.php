<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortCriteria
 *
 * The sort criteria specifies whether sort is ascending or descending,
 *         and	whether the sort is case sensitive. Sort order defaults to
 *         ascending and case sensitive.
 *
 * @Groups [{"id":"846fcf536fcb4b0f0d32e089e99e4bfc:737","type":"sequence"}]
 */
abstract class SortCriteria
{
    /**
     * @ElementName isAscending
     * @Type bool
     * @Group 846fcf536fcb4b0f0d32e089e99e4bfc:737
     * @var bool|null
     */
    protected $isAscending = null;

    /**
     * @ElementName isCaseSensitive
     * @Type bool
     * @Group 846fcf536fcb4b0f0d32e089e99e4bfc:737
     * @var bool|null
     */
    protected $isCaseSensitive = null;

    /**
     * Getter for isAscending
     *
     * @return bool
     */
    public function getIsAscending()
    {
        return $this->isAscending instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAscending;
    }

    /**
     * Setter for isAscending
     *
     * @param bool $isAscending
     * @return $this
     */
    public function setIsAscending($isAscending)
    {
        $this->isAscending = $isAscending;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAscending()
    {
        $this->isAscending = null;
        return $this;
    }

    /**
     * Getter for isCaseSensitive
     *
     * @return bool
     */
    public function getIsCaseSensitive()
    {
        return $this->isCaseSensitive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCaseSensitive;
    }

    /**
     * Setter for isCaseSensitive
     *
     * @param bool $isCaseSensitive
     * @return $this
     */
    public function setIsCaseSensitive($isCaseSensitive)
    {
        $this->isCaseSensitive = $isCaseSensitive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCaseSensitive()
    {
        $this->isCaseSensitive = null;
        return $this;
    }
}

