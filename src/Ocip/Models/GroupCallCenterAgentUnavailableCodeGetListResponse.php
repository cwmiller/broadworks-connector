<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentUnavailableCodeGetListResponse
 *
 * Response to the GroupCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code",
 * "Description".
 *
 * @see GroupCallCenterAgentUnavailableCodeGetListRequest
 */
class GroupCallCenterAgentUnavailableCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unavailableCodesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $unavailableCodesTable = null;

    /**
     * Getter for unavailableCodesTable
     *
     * @ElementName unavailableCodesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUnavailableCodesTable()
    {
        return $this->unavailableCodesTable;
    }

    /**
     * Setter for unavailableCodesTable
     *
     * @ElementName unavailableCodesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $unavailableCodesTable
     * @return $this
     */
    public function setUnavailableCodesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unavailableCodesTable)
    {
        $this->unavailableCodesTable = $unavailableCodesTable;
        return $this;
    }


}

