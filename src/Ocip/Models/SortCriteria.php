<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortCriteria
 *
 * The sort criteria specifies whether sort is ascending or descending, and
 * 				whether the sort is case sensitive. Sort order defaults to
 * 				ascending and case sensitive.
 */
abstract class SortCriteria
{

    /**
     * @ElementName isAscending
     * @var bool|null
     */
    private $isAscending = null;

    /**
     * @ElementName isCaseSensitive
     * @var bool|null
     */
    private $isCaseSensitive = null;

    /**
     * Getter for isAscending
     *
     * @ElementName isAscending
     * @return bool|null
     */
    public function getIsAscending()
    {
        return $this->isAscending;
    }

    /**
     * Setter for isAscending
     *
     * @ElementName isAscending
     * @param bool|null $isAscending
     * @return $this
     */
    public function setIsAscending($isAscending)
    {
        $this->isAscending = $isAscending;
        return $this;
    }

    /**
     * Getter for isCaseSensitive
     *
     * @ElementName isCaseSensitive
     * @return bool|null
     */
    public function getIsCaseSensitive()
    {
        return $this->isCaseSensitive;
    }

    /**
     * Setter for isCaseSensitive
     *
     * @ElementName isCaseSensitive
     * @param bool|null $isCaseSensitive
     * @return $this
     */
    public function setIsCaseSensitive($isCaseSensitive)
    {
        $this->isCaseSensitive = $isCaseSensitive;
        return $this;
    }


}

