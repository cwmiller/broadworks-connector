<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentUnavailableCodeGetListResponse
 *
 * Response to the GroupCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 *
 * @see GroupCallCenterAgentUnavailableCodeGetListRequest
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:2261","type":"sequence"}]
 */
class GroupCallCenterAgentUnavailableCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unavailableCodesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2261
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

