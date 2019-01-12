<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupAdminGetPagedSortedList
 *
 * Used to sort the GroupAdminGetPagedSortedListRequest request.
 *
 * @see GroupAdminGetPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7597","type":"choice"}]
 */
class SortOrderGroupAdminGetPagedSortedList
{

    /**
     * @ElementName sortByAdminId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAdminId
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7597
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAdminId|null
     */
    private $sortByAdminId = null;

    /**
     * @ElementName sortByAdminLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAdminLastName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7597
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAdminLastName|null
     */
    private $sortByAdminLastName = null;

    /**
     * @ElementName sortByAdminFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAdminFirstName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7597
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAdminFirstName|null
     */
    private $sortByAdminFirstName = null;

    /**
     * Getter for sortByAdminId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByAdminId
     */
    public function getSortByAdminId()
    {
        return $this->sortByAdminId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByAdminId;
    }

    /**
     * Setter for sortByAdminId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByAdminId $sortByAdminId
     * @return $this
     */
    public function setSortByAdminId(\CWM\BroadWorksConnector\Ocip\Models\SortByAdminId $sortByAdminId)
    {
        $this->sortByAdminId = $sortByAdminId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByAdminId()
    {
        $this->sortByAdminId = null;
        return $this;
    }

    /**
     * Getter for sortByAdminLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByAdminLastName
     */
    public function getSortByAdminLastName()
    {
        return $this->sortByAdminLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByAdminLastName;
    }

    /**
     * Setter for sortByAdminLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByAdminLastName $sortByAdminLastName
     * @return $this
     */
    public function setSortByAdminLastName(\CWM\BroadWorksConnector\Ocip\Models\SortByAdminLastName $sortByAdminLastName)
    {
        $this->sortByAdminLastName = $sortByAdminLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByAdminLastName()
    {
        $this->sortByAdminLastName = null;
        return $this;
    }

    /**
     * Getter for sortByAdminFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByAdminFirstName
     */
    public function getSortByAdminFirstName()
    {
        return $this->sortByAdminFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByAdminFirstName;
    }

    /**
     * Setter for sortByAdminFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByAdminFirstName $sortByAdminFirstName
     * @return $this
     */
    public function setSortByAdminFirstName(\CWM\BroadWorksConnector\Ocip\Models\SortByAdminFirstName $sortByAdminFirstName)
    {
        $this->sortByAdminFirstName = $sortByAdminFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByAdminFirstName()
    {
        $this->sortByAdminFirstName = null;
        return $this;
    }


}

