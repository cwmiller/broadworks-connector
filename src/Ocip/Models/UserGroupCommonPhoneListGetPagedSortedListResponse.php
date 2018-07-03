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
 */
class UserGroupCommonPhoneListGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName groupCommonPhoneListTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupCommonPhoneListTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @return int|null
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @param int|null $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * Getter for groupCommonPhoneListTable
     *
     * @ElementName groupCommonPhoneListTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupCommonPhoneListTable()
    {
        return $this->groupCommonPhoneListTable;
    }

    /**
     * Setter for groupCommonPhoneListTable
     *
     * @ElementName groupCommonPhoneListTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupCommonPhoneListTable
     * @return $this
     */
    public function setGroupCommonPhoneListTable($groupCommonPhoneListTable)
    {
        $this->groupCommonPhoneListTable = $groupCommonPhoneListTable;
        return $this;
    }


}

