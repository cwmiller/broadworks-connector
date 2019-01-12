<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList
 *
 * Used to sort the SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest.
 *
 * @see SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1672","type":"choice"}]
 */
class SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList
{

    /**
     * @ElementName sortByMobileDirectoryNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber|null
     */
    private $sortByMobileDirectoryNumber = null;

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    private $sortByDn = null;

    /**
     * @ElementName sortByDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName|null
     */
    private $sortByDepartmentName = null;

    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    private $sortByUserId = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    private $sortByUserFirstName = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    private $sortByUserLastName = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    private $sortByExtension = null;

    /**
     * @ElementName sortByDnAvailable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1672
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDnAvailable|null
     */
    private $sortByDnAvailable = null;

    /**
     * Getter for sortByMobileDirectoryNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber
     */
    public function getSortByMobileDirectoryNumber()
    {
        return $this->sortByMobileDirectoryNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByMobileDirectoryNumber;
    }

    /**
     * Setter for sortByMobileDirectoryNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber $sortByMobileDirectoryNumber
     * @return $this
     */
    public function setSortByMobileDirectoryNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByMobileDirectoryNumber $sortByMobileDirectoryNumber)
    {
        $this->sortByMobileDirectoryNumber = $sortByMobileDirectoryNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByMobileDirectoryNumber()
    {
        $this->sortByMobileDirectoryNumber = null;
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


}

