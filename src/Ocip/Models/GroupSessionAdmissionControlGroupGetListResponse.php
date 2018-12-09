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
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:6835","type":"sequence"}]
 */
class GroupSessionAdmissionControlGroupGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sessionAdmissionControlGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 15129cd25fa2d5581f4edfd652c24f93:6835
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $sessionAdmissionControlGroupTable = null;

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

