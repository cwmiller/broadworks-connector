<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCallDispositionCodeGetListResponse
 *
 * Response to the EnterpriseCallCenterCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code",
 * "Description".
 *
 * @see EnterpriseCallCenterCallDispositionCodeGetListRequest
 */
class EnterpriseCallCenterCallDispositionCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dispositionCodesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dispositionCodesTable = null;

    /**
     * Getter for dispositionCodesTable
     *
     * @ElementName dispositionCodesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable;
    }

    /**
     * Setter for dispositionCodesTable
     *
     * @ElementName dispositionCodesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dispositionCodesTable
     * @return $this
     */
    public function setDispositionCodesTable($dispositionCodesTable)
    {
        $this->dispositionCodesTable = $dispositionCodesTable;
        return $this;
    }


}

