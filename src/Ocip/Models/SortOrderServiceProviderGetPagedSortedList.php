<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderServiceProviderGetPagedSortedList
 *
 * Used to sort the ServiceProviderGetPagedSortedListRequest request.
 *
 * @see ServiceProviderGetPagedSortedListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7288","type":"choice"}]
 */
class SortOrderServiceProviderGetPagedSortedList
{
    /**
     * @ElementName sortByServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId
     * @Group e19a9072c2dad499e9f28837da5768db:7288
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId|null
     */
    protected $sortByServiceProviderId = null;

    /**
     * @ElementName sortByServiceProviderName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName
     * @Group e19a9072c2dad499e9f28837da5768db:7288
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName|null
     */
    protected $sortByServiceProviderName = null;

    /**
     * Getter for sortByServiceProviderId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId
     */
    public function getSortByServiceProviderId()
    {
        return $this->sortByServiceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByServiceProviderId;
    }

    /**
     * Setter for sortByServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId $sortByServiceProviderId
     * @return $this
     */
    public function setSortByServiceProviderId(\CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId $sortByServiceProviderId)
    {
        $this->sortByServiceProviderId = $sortByServiceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByServiceProviderId()
    {
        $this->sortByServiceProviderId = null;
        return $this;
    }

    /**
     * Getter for sortByServiceProviderName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName
     */
    public function getSortByServiceProviderName()
    {
        return $this->sortByServiceProviderName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByServiceProviderName;
    }

    /**
     * Setter for sortByServiceProviderName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName $sortByServiceProviderName
     * @return $this
     */
    public function setSortByServiceProviderName(\CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName $sortByServiceProviderName)
    {
        $this->sortByServiceProviderName = $sortByServiceProviderName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByServiceProviderName()
    {
        $this->sortByServiceProviderName = null;
        return $this;
    }
}

