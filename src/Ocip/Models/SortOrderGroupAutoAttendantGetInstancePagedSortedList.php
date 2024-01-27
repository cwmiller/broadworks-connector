<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupAutoAttendantGetInstancePagedSortedList
 *
 * Used to sort the GroupAutoAttendantGetInstancePagedSortedListRequest request.
 *
 * @see GroupAutoAttendantGetInstancePagedSortedListRequest
 * @Groups [{"id":"ec63a55bc41262b2dd33a1f4e8e84674:697","type":"choice"}]
 */
class SortOrderGroupAutoAttendantGetInstancePagedSortedList
{
    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:697
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    protected $sortByUserId = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:697
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    protected $sortByUserLastName = null;

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:697
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    protected $sortByDn = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:697
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    protected $sortByExtension = null;

    /**
     * Getter for sortByUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     */
    public function getSortByUserId()
    {
        return $this->sortByUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserId;
    }

    /**
     * Setter for sortByUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserId $sortByUserId
     * @return $this
     */
    public function setSortByUserId(\CWM\BroadWorksConnector\Ocip\Models\SortByUserId $sortByUserId)
    {
        $this->sortByUserId = $sortByUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserId()
    {
        $this->sortByUserId = null;
        return $this;
    }

    /**
     * Getter for sortByUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     */
    public function getSortByUserLastName()
    {
        return $this->sortByUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserLastName;
    }

    /**
     * Setter for sortByUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName
     * @return $this
     */
    public function setSortByUserLastName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName)
    {
        $this->sortByUserLastName = $sortByUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserLastName()
    {
        $this->sortByUserLastName = null;
        return $this;
    }

    /**
     * Getter for sortByDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     */
    public function getSortByDn()
    {
        return $this->sortByDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDn;
    }

    /**
     * Setter for sortByDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDn $sortByDn
     * @return $this
     */
    public function setSortByDn(\CWM\BroadWorksConnector\Ocip\Models\SortByDn $sortByDn)
    {
        $this->sortByDn = $sortByDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDn()
    {
        $this->sortByDn = null;
        return $this;
    }

    /**
     * Getter for sortByExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     */
    public function getSortByExtension()
    {
        return $this->sortByExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByExtension;
    }

    /**
     * Setter for sortByExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByExtension $sortByExtension
     * @return $this
     */
    public function setSortByExtension(\CWM\BroadWorksConnector\Ocip\Models\SortByExtension $sortByExtension)
    {
        $this->sortByExtension = $sortByExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByExtension()
    {
        $this->sortByExtension = null;
        return $this;
    }
}

