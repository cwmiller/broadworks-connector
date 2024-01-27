<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupGetListResponse
 *
 * Response to GroupSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the group.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions", "Maximum Originating Sessions", "Maximum Terminating Sessions".
 *
 * @see GroupSessionAdmissionControlGroupGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7889","type":"sequence"}]
 */
class GroupSessionAdmissionControlGroupGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sessionAdmissionControlGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:7889
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $sessionAdmissionControlGroupTable = null;

    /**
     * Getter for sessionAdmissionControlGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSessionAdmissionControlGroupTable()
    {
        return $this->sessionAdmissionControlGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sessionAdmissionControlGroupTable;
    }

    /**
     * Setter for sessionAdmissionControlGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $sessionAdmissionControlGroupTable
     * @return $this
     */
    public function setSessionAdmissionControlGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $sessionAdmissionControlGroupTable)
    {
        $this->sessionAdmissionControlGroupTable = $sessionAdmissionControlGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSessionAdmissionControlGroupTable()
    {
        $this->sessionAdmissionControlGroupTable = null;
        return $this;
    }
}

