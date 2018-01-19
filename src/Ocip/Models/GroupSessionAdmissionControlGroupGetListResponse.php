<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupGetListResponse
 *
 * Response to GroupSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the
 * group.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions",
 * "Maximum Originating Sessions", "Maximum Terminating Sessions".
 */
class GroupSessionAdmissionControlGroupGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sessionAdmissionControlGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $sessionAdmissionControlGroupTable = null;

    /**
     * Getter for sessionAdmissionControlGroupTable
     *
     * @ElementName sessionAdmissionControlGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSessionAdmissionControlGroupTable()
    {
        return $this->sessionAdmissionControlGroupTable;
    }

    /**
     * Setter for sessionAdmissionControlGroupTable
     *
     * @ElementName sessionAdmissionControlGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $sessionAdmissionControlGroupTable
     * @return $this
     */
    public function setSessionAdmissionControlGroupTable($sessionAdmissionControlGroupTable)
    {
        $this->sessionAdmissionControlGroupTable = $sessionAdmissionControlGroupTable;
        return $this;
    }


}
