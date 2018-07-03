<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnterpriseCommonPhoneListGetPagedSortedListResponse
 *
 * Response to the UserEnterpriseCommonPhoneListGetPagedSortedListRequest. The
 * response
 * 				contains the enterprise's common phone list. The response contains a
 * 				table with column headings: "Name" and "Phone Number".
 *
 * @see UserEnterpriseCommonPhoneListGetPagedSortedListRequest
 */
class UserEnterpriseCommonPhoneListGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName enterpriseCommonPhoneListTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $enterpriseCommonPhoneListTable = null;

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
     * Getter for enterpriseCommonPhoneListTable
     *
     * @ElementName enterpriseCommonPhoneListTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getEnterpriseCommonPhoneListTable()
    {
        return $this->enterpriseCommonPhoneListTable;
    }

    /**
     * Setter for enterpriseCommonPhoneListTable
     *
     * @ElementName enterpriseCommonPhoneListTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $enterpriseCommonPhoneListTable
     * @return $this
     */
    public function setEnterpriseCommonPhoneListTable($enterpriseCommonPhoneListTable)
    {
        $this->enterpriseCommonPhoneListTable = $enterpriseCommonPhoneListTable;
        return $this;
    }


}

