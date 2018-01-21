<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortCriteriaNumeric
 *
 * The sort criteria specifies whether sort is
 *         ascending or descending.
 *         Sort order defaults to ascending.
 */
abstract class SortCriteriaNumeric
{

    /**
     * @ElementName isAscending
     * @var bool|null
     */
    private $isAscending = null;

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


}

