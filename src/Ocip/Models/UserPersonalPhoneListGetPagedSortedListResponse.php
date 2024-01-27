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
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2909","type":"sequence"}]
 */
class UserPersonalPhoneListGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2909
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName personalPhoneListTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2909
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $personalPhoneListTable = null;

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
     * Getter for personalPhoneListTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPersonalPhoneListTable()
    {
        return $this->personalPhoneListTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalPhoneListTable;
    }

    /**
     * Setter for personalPhoneListTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $personalPhoneListTable
     * @return $this
     */
    public function setPersonalPhoneListTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $personalPhoneListTable)
    {
        $this->personalPhoneListTable = $personalPhoneListTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalPhoneListTable()
    {
        $this->personalPhoneListTable = null;
        return $this;
    }
}

