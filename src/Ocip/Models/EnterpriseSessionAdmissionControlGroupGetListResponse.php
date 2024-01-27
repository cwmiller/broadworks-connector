<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGroupGetListResponse
 *
 * Response to EnterpriseSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the enterprise.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions", "Maximum Originating Sessions", "Maximum Terminating Sessions"..
 *
 * @see EnterpriseSessionAdmissionControlGroupGetListRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:678","type":"sequence"}]
 */
class EnterpriseSessionAdmissionControlGroupGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sessionAdmissionControlGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 405ec18fe08719ecf74e749d7e18c88f:678
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

