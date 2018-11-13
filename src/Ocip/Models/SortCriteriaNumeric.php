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
     * @Type bool
     * @var bool|null
     */
    private $isAscending = null;

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


}

