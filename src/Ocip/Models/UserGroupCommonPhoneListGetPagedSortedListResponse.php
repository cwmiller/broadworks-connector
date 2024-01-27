<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupCommonPhoneListGetPagedSortedListResponse
 *
 * Response to the UserGroupCommonPhoneListGetPagedSortedListRequest.
 * 				The response contains the group's common phone list. The response
 * 				contains a table with column headings: "Name" and "Phone Number".
 *
 * @see UserGroupCommonPhoneListGetPagedSortedListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2361","type":"sequence"}]
 */
class UserGroupCommonPhoneListGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2361
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName groupCommonPhoneListTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2361
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupCommonPhoneListTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

    /**
     * Getter for groupCommonPhoneListTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupCommonPhoneListTable()
    {
        return $this->groupCommonPhoneListTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCommonPhoneListTable;
    }

    /**
     * Setter for groupCommonPhoneListTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupCommonPhoneListTable
     * @return $this
     */
    public function setGroupCommonPhoneListTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupCommonPhoneListTable)
    {
        $this->groupCommonPhoneListTable = $groupCommonPhoneListTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCommonPhoneListTable()
    {
        $this->groupCommonPhoneListTable = null;
        return $this;
    }
}

