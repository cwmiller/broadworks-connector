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
     * @Type int
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName enterpriseCommonPhoneListTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $enterpriseCommonPhoneListTable = null;

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
     * Getter for enterpriseCommonPhoneListTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getEnterpriseCommonPhoneListTable()
    {
        return $this->enterpriseCommonPhoneListTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseCommonPhoneListTable;
    }

    /**
     * Setter for enterpriseCommonPhoneListTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseCommonPhoneListTable
     * @return $this
     */
    public function setEnterpriseCommonPhoneListTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseCommonPhoneListTable)
    {
        $this->enterpriseCommonPhoneListTable = $enterpriseCommonPhoneListTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseCommonPhoneListTable()
    {
        $this->enterpriseCommonPhoneListTable = null;
        return $this;
    }


}

