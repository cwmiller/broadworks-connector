<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupCallParkGetAvailableAlternateRecallUserPagedSortedList
 *
 * Used to sort the GroupCallParkGetAvailableAlternateRecallUserPagedSortedListRequest request.
 *
 * @see GroupCallParkGetAvailableAlternateRecallUserPagedSortedListRequest
 * @Groups [{"id":"7a925e891158dfa3cb1319e045608894:583","type":"choice"}]
 */
class SortOrderGroupCallParkGetAvailableAlternateRecallUserPagedSortedList
{

    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group 7a925e891158dfa3cb1319e045608894:583
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    protected $sortByUserId = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group 7a925e891158dfa3cb1319e045608894:583
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    protected $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @Group 7a925e891158dfa3cb1319e045608894:583
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    protected $sortByUserFirstName = null;

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group 7a925e891158dfa3cb1319e045608894:583
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    protected $sortByDn = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group 7a925e891158dfa3cb1319e045608894:583
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    protected $sortByExtension = null;

    /**
     * @ElementName sortByDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     * @Group 7a925e891158dfa3cb1319e045608894:583
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName|null
     */
    protected $sortByDepartmentName = null;

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


}

