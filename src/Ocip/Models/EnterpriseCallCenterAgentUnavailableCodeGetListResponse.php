<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeGetListResponse
 *
 * Response to the EnterpriseCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:792","type":"sequence"}]
 */
class EnterpriseCallCenterAgentUnavailableCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName unavailableCodesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:792
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $unavailableCodesTable = null;

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

