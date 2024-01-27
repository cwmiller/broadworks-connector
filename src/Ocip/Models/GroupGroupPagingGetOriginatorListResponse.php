<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetOriginatorListResponse
 *
 * Response to the GroupGroupPagingGetOriginatorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupGroupPagingGetOriginatorListRequest
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:353","type":"sequence"}]
 */
class GroupGroupPagingGetOriginatorListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName originatorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8ede928f2a9c1318573ba9c7a105655c:353
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $originatorTable = null;

    /**
     * Getter for originatorTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getOriginatorTable()
    {
        return $this->originatorTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatorTable;
    }

    /**
     * Setter for originatorTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $originatorTable
     * @return $this
     */
    public function setOriginatorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $originatorTable)
    {
        $this->originatorTable = $originatorTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatorTable()
    {
        $this->originatorTable = null;
        return $this;
    }
}

