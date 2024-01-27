<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCallDispositionCodeGetListResponse
 *
 * Response to the EnterpriseCallCenterCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 *
 * @see EnterpriseCallCenterCallDispositionCodeGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:974","type":"sequence"}]
 */
class EnterpriseCallCenterCallDispositionCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dispositionCodesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:974
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $dispositionCodesTable = null;

    /**
     * Getter for dispositionCodesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dispositionCodesTable;
    }

    /**
     * Setter for dispositionCodesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dispositionCodesTable
     * @return $this
     */
    public function setDispositionCodesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dispositionCodesTable)
    {
        $this->dispositionCodesTable = $dispositionCodesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDispositionCodesTable()
    {
        $this->dispositionCodesTable = null;
        return $this;
    }
}

