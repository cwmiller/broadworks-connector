<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetBridgeListResponse
 *
 * Response to the UserMeetMeConferencingGetBridgeListRequest.
 *         Contains a table with column headings: "Bridge Id", "Name", "Phone Number", "Extension", "Ports", and "Is Active"
 *         The column values for "Is Active" can either be true, or false.
 *
 * @see UserMeetMeConferencingGetBridgeListRequest
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:666","type":"sequence"}]
 */
class UserMeetMeConferencingGetBridgeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceBridgeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0fd24121d16995c994d40bc408dbcfa5:666
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $conferenceBridgeTable = null;

    /**
     * Getter for conferenceBridgeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getConferenceBridgeTable()
    {
        return $this->conferenceBridgeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceBridgeTable;
    }

    /**
     * Setter for conferenceBridgeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceBridgeTable
     * @return $this
     */
    public function setConferenceBridgeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceBridgeTable)
    {
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceBridgeTable()
    {
        $this->conferenceBridgeTable = null;
        return $this;
    }


}

