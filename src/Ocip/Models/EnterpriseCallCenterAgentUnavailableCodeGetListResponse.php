<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeGetListResponse
 *
 * Response to the EnterpriseCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeGetListRequest
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:642","type":"sequence"}]
 */
class EnterpriseCallCenterAgentUnavailableCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unavailableCodesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:642
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $unavailableCodesTable = null;

    /**
     * Getter for unavailableCodesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUnavailableCodesTable()
    {
        return $this->unavailableCodesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unavailableCodesTable;
    }

    /**
     * Setter for unavailableCodesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unavailableCodesTable
     * @return $this
     */
    public function setUnavailableCodesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unavailableCodesTable)
    {
        $this->unavailableCodesTable = $unavailableCodesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnavailableCodesTable()
    {
        $this->unavailableCodesTable = null;
        return $this;
    }


}

