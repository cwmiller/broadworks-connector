<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupCallCenterGetInstancePagedSortedList
 *
 * Used to sort the GroupCallCenterGetInstancePagedSortedListRequest request.
 *
 * @see GroupCallCenterGetInstancePagedSortedListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7847","type":"choice"}]
 */
class SortOrderGroupCallCenterGetInstancePagedSortedList
{

    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    protected $sortByUserId = null;

    /**
     * @ElementName sortByCallCenterName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterName
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterName|null
     */
    protected $sortByCallCenterName = null;

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    protected $sortByDn = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    protected $sortByExtension = null;

    /**
     * @ElementName sortByDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName|null
     */
    protected $sortByDepartmentName = null;

    /**
     * @ElementName sortByHuntPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByHuntPolicy
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByHuntPolicy|null
     */
    protected $sortByHuntPolicy = null;

    /**
     * @ElementName sortByCallCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterType
     * @Group e2c537e3e39483b96620673a7012ffdd:7847
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterType|null
     */
    protected $sortByCallCenterType = null;

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
     * Getter for sortByCallCenterName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterName
     */
    public function getSortByCallCenterName()
    {
        return $this->sortByCallCenterName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByCallCenterName;
    }

    /**
     * Setter for sortByCallCenterName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterName $sortByCallCenterName
     * @return $this
     */
    public function setSortByCallCenterName(\CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterName $sortByCallCenterName)
    {
        $this->sortByCallCenterName = $sortByCallCenterName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByCallCenterName()
    {
        $this->sortByCallCenterName = null;
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

    /**
     * Getter for sortByDepartmentName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     */
    public function getSortByDepartmentName()
    {
        return $this->sortByDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDepartmentName;
    }

    /**
     * Setter for sortByDepartmentName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName $sortByDepartmentName
     * @return $this
     */
    public function setSortByDepartmentName(\CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName $sortByDepartmentName)
    {
        $this->sortByDepartmentName = $sortByDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDepartmentName()
    {
        $this->sortByDepartmentName = null;
        return $this;
    }

    /**
     * Getter for sortByHuntPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByHuntPolicy
     */
    public function getSortByHuntPolicy()
    {
        return $this->sortByHuntPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByHuntPolicy;
    }

    /**
     * Setter for sortByHuntPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByHuntPolicy $sortByHuntPolicy
     * @return $this
     */
    public function setSortByHuntPolicy(\CWM\BroadWorksConnector\Ocip\Models\SortByHuntPolicy $sortByHuntPolicy)
    {
        $this->sortByHuntPolicy = $sortByHuntPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByHuntPolicy()
    {
        $this->sortByHuntPolicy = null;
        return $this;
    }

    /**
     * Getter for sortByCallCenterType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterType
     */
    public function getSortByCallCenterType()
    {
        return $this->sortByCallCenterType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByCallCenterType;
    }

    /**
     * Setter for sortByCallCenterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterType $sortByCallCenterType
     * @return $this
     */
    public function setSortByCallCenterType(\CWM\BroadWorksConnector\Ocip\Models\SortByCallCenterType $sortByCallCenterType)
    {
        $this->sortByCallCenterType = $sortByCallCenterType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByCallCenterType()
    {
        $this->sortByCallCenterType = null;
        return $this;
    }


}

