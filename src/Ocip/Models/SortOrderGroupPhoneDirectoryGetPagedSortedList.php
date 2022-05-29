<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupPhoneDirectoryGetPagedSortedList
 *
 * Used to sort the GroupPhoneDirectoryGetPagedSortedListRequest request.
 *
 * @see GroupPhoneDirectoryGetPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:9144","type":"choice"}]
 */
class SortOrderGroupPhoneDirectoryGetPagedSortedList
{

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    protected $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    protected $sortByUserFirstName = null;

    /**
     * @ElementName sortByMobilePhoneNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByMobilePhoneNumber
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByMobilePhoneNumber|null
     */
    protected $sortByMobilePhoneNumber = null;

    /**
     * @ElementName sortByEmailAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress|null
     */
    protected $sortByEmailAddress = null;

    /**
     * @ElementName sortByDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName|null
     */
    protected $sortByDepartmentName = null;

    /**
     * @ElementName sortByYahooId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByYahooId
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByYahooId|null
     */
    protected $sortByYahooId = null;

    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    protected $sortByUserId = null;

    /**
     * @ElementName sortByImpId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByImpId
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByImpId|null
     */
    protected $sortByImpId = null;

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
     * Getter for sortByMobilePhoneNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByMobilePhoneNumber
     */
    public function getSortByMobilePhoneNumber()
    {
        return $this->sortByMobilePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByMobilePhoneNumber;
    }

    /**
     * Setter for sortByMobilePhoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByMobilePhoneNumber $sortByMobilePhoneNumber
     * @return $this
     */
    public function setSortByMobilePhoneNumber(\CWM\BroadWorksConnector\Ocip\Models\SortByMobilePhoneNumber $sortByMobilePhoneNumber)
    {
        $this->sortByMobilePhoneNumber = $sortByMobilePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByMobilePhoneNumber()
    {
        $this->sortByMobilePhoneNumber = null;
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
     * Getter for sortByYahooId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByYahooId
     */
    public function getSortByYahooId()
    {
        return $this->sortByYahooId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByYahooId;
    }

    /**
     * Setter for sortByYahooId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByYahooId $sortByYahooId
     * @return $this
     */
    public function setSortByYahooId(\CWM\BroadWorksConnector\Ocip\Models\SortByYahooId $sortByYahooId)
    {
        $this->sortByYahooId = $sortByYahooId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByYahooId()
    {
        $this->sortByYahooId = null;
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
     * Getter for sortByImpId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByImpId
     */
    public function getSortByImpId()
    {
        return $this->sortByImpId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByImpId;
    }

    /**
     * Setter for sortByImpId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByImpId $sortByImpId
     * @return $this
     */
    public function setSortByImpId(\CWM\BroadWorksConnector\Ocip\Models\SortByImpId $sortByImpId)
    {
        $this->sortByImpId = $sortByImpId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByImpId()
    {
        $this->sortByImpId = null;
        return $this;
    }


}

