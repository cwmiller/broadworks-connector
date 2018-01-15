<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetOriginatorListResponse
 *
 * Response to the GroupGroupPagingGetOriginatorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 */
class GroupGroupPagingGetOriginatorListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName originatorTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $originatorTable = null;

    /**
     * Getter for originatorTable
     *
     * @ElementName originatorTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getOriginatorTable()
    {
        return $this->originatorTable;
    }

    /**
     * Setter for originatorTable
     *
     * @ElementName originatorTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $originatorTable
     * @return $this
     */
    public function setOriginatorTable($originatorTable)
    {
        $this->originatorTable = $originatorTable;
        return $this;
    }


}

