<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceListResponse
 *
 * Response to the GroupAutoAttendantGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension",
 * "Department", "Is Active", "Type".
 *         The column values for "Video" and "Is Active" can either be true, or
 * false.
 *         The column values for "Type" can either be Basic or Standard.
 *
 *         In HSS Mode the value for the "Type" column will always be populated
 * with Basic.
 */
class GroupAutoAttendantGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName autoAttendantTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $autoAttendantTable = null;

    /**
     * Getter for autoAttendantTable
     *
     * @ElementName autoAttendantTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAutoAttendantTable()
    {
        return $this->autoAttendantTable;
    }

    /**
     * Setter for autoAttendantTable
     *
     * @ElementName autoAttendantTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $autoAttendantTable
     * @return $this
     */
    public function setAutoAttendantTable($autoAttendantTable)
    {
        $this->autoAttendantTable = $autoAttendantTable;
        return $this;
    }


}

