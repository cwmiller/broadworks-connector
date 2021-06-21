<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderServiceProviderGetPagedSortedList
 *
 * Used to sort the ServiceProviderGetPagedSortedListRequest request.
 *
 * @see ServiceProviderGetPagedSortedListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:7213","type":"choice"}]
 */
class SortOrderServiceProviderGetPagedSortedList
{

    /**
     * @ElementName sortByServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7213
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderId|null
     */
    private $sortByServiceProviderId = null;

    /**
     * @ElementName sortByServiceProviderName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7213
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByServiceProviderName|null
     */
    private $sortByServiceProviderName = null;

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

