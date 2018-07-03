<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListGetPagedSortedListResponse
 *
 * Response to the UserPersonalPhoneListGetPagedSortedListRequest.
 * 				The response contains a user's personal phone list. The response
 * 				contains a table with column headings: "Name" and "Phone Number".
 *
 * @see UserPersonalPhoneListGetPagedSortedListRequest
 */
class UserPersonalPhoneListGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName personalPhoneListTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $personalPhoneListTable = null;

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
     * Getter for personalPhoneListTable
     *
     * @ElementName personalPhoneListTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPersonalPhoneListTable()
    {
        return $this->personalPhoneListTable;
    }

    /**
     * Setter for personalPhoneListTable
     *
     * @ElementName personalPhoneListTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $personalPhoneListTable
     * @return $this
     */
    public function setPersonalPhoneListTable($personalPhoneListTable)
    {
        $this->personalPhoneListTable = $personalPhoneListTable;
        return $this;
    }


}

