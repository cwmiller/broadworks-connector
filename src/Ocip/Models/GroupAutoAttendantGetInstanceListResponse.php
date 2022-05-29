<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceListResponse
 *
 * Response to the GroupAutoAttendantGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active", "Type".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 *         The column values for "Type" can either be Basic or Standard.
 *
 *         In XS Mode the value for the "Type" column will always be populated with Basic.
 *
 * @see GroupAutoAttendantGetInstanceListRequest
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:257","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName autoAttendantTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:257
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

