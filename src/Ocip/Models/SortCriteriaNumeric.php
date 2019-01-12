<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortCriteriaNumeric
 *
 * The sort criteria specifies whether sort is
 *         ascending or descending.
 *         Sort order defaults to ascending.
 *
 * @Groups [{"id":"58293b6da8bb02a6430b3eb1beb91194:737","type":"sequence"}]
 */
abstract class SortCriteriaNumeric
{

    /**
     * @ElementName isAscending
     * @Type bool
     * @Group 58293b6da8bb02a6430b3eb1beb91194:737
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

