<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstancePagedSortedListResponse
 *
 * Response to the GroupAutoAttendantGetInstancePagedSortedListRequest.
 *         The response contains a table with columns:
 *         "Service User Id", "Name", "Phone Number", "Is Phone Number Activated", "Country Code",
 *         "National Prefix", "Extension", "Department", "Department Type", "Parent Department",
 *         "Parent Department Type", "Is Active", "Type".
 *         The column values for "Is Active" can either be true, or false.
 *         The column values for "Type" can either be Basic or Standard.
 *         The "Department Type" and "Parent Department Type" columns will contain the values "Enterprise" or "Group".
 *         
 *         In XS Mode the value for the "Type" column will always be populated with Basic.
 *
 * @see GroupAutoAttendantGetInstancePagedSortedListRequest
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:320","type":"sequence"}]
 */
class GroupAutoAttendantGetInstancePagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName autoAttendantTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:320
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $autoAttendantTable = null;

    /**
     * Getter for autoAttendantTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAutoAttendantTable()
    {
        return $this->autoAttendantTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoAttendantTable;
    }

    /**
     * Setter for autoAttendantTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $autoAttendantTable
     * @return $this
     */
    public function setAutoAttendantTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $autoAttendantTable)
    {
        $this->autoAttendantTable = $autoAttendantTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoAttendantTable()
    {
        $this->autoAttendantTable = null;
        return $this;
    }


}

