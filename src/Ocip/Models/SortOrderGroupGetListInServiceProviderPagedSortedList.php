<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupGetListInServiceProviderPagedSortedList
 *
 * Used to sort the GroupGetListInServiceProviderPagedSortedListRequest request.
 *
 * @see GroupGetListInServiceProviderPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:9132","type":"choice"}]
 */
class SortOrderGroupGetListInServiceProviderPagedSortedList
{

    /**
     * @ElementName sortByGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9132
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId|null
     */
    protected $sortByGroupId = null;

    /**
     * @ElementName sortByGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByGroupName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9132
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupName|null
     */
    protected $sortByGroupName = null;

    /**
     * Getter for sortByGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId
     */
    public function getSortByGroupId()
    {
        return $this->sortByGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByGroupId;
    }

    /**
     * Setter for sortByGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId $sortByGroupId
     * @return $this
     */
    public function setSortByGroupId(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupId $sortByGroupId)
    {
        $this->sortByGroupId = $sortByGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByGroupId()
    {
        $this->sortByGroupId = null;
        return $this;
    }

    /**
     * Getter for sortByGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupName
     */
    public function getSortByGroupName()
    {
        return $this->sortByGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByGroupName;
    }

    /**
     * Setter for sortByGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupName $sortByGroupName
     * @return $this
     */
    public function setSortByGroupName(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupName $sortByGroupName)
    {
        $this->sortByGroupName = $sortByGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByGroupName()
    {
        $this->sortByGroupName = null;
        return $this;
    }


}

