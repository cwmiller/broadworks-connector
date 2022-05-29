<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupDnGetAssignmentPagedSortedList
 *
 * Used to sort the GroupDnGetAssignmentPagedSortedListRequest request.
 *
 * @see GroupDnGetAssignmentPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:9113","type":"choice"}]
 */
class SortOrderGroupDnGetAssignmentPagedSortedList
{

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    protected $sortByDn = null;

    /**
     * @ElementName sortByDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName|null
     */
    protected $sortByDepartmentName = null;

    /**
     * @ElementName sortByDnActivated
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDnActivated
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDnActivated|null
     */
    protected $sortByDnActivated = null;

    /**
     * @ElementName sortByDnAvailable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable|null
     */
    protected $sortByDnAvailable = null;

    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    protected $sortByUserId = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    protected $sortByUserFirstName = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    protected $sortByUserLastName = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    protected $sortByExtension = null;

    /**
     * @ElementName sortByEmailAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9113
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress|null
     */
    protected $sortByEmailAddress = null;

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
     * Getter for sortByDnActivated
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDnActivated
     */
    public function getSortByDnActivated()
    {
        return $this->sortByDnActivated instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDnActivated;
    }

    /**
     * Setter for sortByDnActivated
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDnActivated $sortByDnActivated
     * @return $this
     */
    public function setSortByDnActivated(\CWM\BroadWorksConnector\Ocip\Models\SortByDnActivated $sortByDnActivated)
    {
        $this->sortByDnActivated = $sortByDnActivated;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDnActivated()
    {
        $this->sortByDnActivated = null;
        return $this;
    }

    /**
     * Getter for sortByDnAvailable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable
     */
    public function getSortByDnAvailable()
    {
        return $this->sortByDnAvailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDnAvailable;
    }

    /**
     * Setter for sortByDnAvailable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable $sortByDnAvailable
     * @return $this
     */
    public function setSortByDnAvailable(\CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable $sortByDnAvailable)
    {
        $this->sortByDnAvailable = $sortByDnAvailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDnAvailable()
    {
        $this->sortByDnAvailable = null;
        return $this;
    }

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
     * Getter for sortByUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     */
    public function getSortByUserFirstName()
    {
        return $this->sortByUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserFirstName;
    }

    /**
     * Setter for sortByUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName
     * @return $this
     */
    public function setSortByUserFirstName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName)
    {
        $this->sortByUserFirstName = $sortByUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserFirstName()
    {
        $this->sortByUserFirstName = null;
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
     * Getter for sortByEmailAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress
     */
    public function getSortByEmailAddress()
    {
        return $this->sortByEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByEmailAddress;
    }

    /**
     * Setter for sortByEmailAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress $sortByEmailAddress
     * @return $this
     */
    public function setSortByEmailAddress(\CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress $sortByEmailAddress)
    {
        $this->sortByEmailAddress = $sortByEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByEmailAddress()
    {
        $this->sortByEmailAddress = null;
        return $this;
    }


}

