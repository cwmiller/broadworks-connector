<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointQueueCallDispositionCodeGetListResponse
 *
 * Response to the GroupRoutePointQueueCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code",
 * "Description" and "Level".
 *         Level column can be any of the values in the data type
 * CallDispositionCodeLevel.
 *
 * @see GroupRoutePointQueueCallDispositionCodeGetListRequest
 */
class GroupRoutePointQueueCallDispositionCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setDispositionCodesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dispositionCodesTable)
    {
        $this->dispositionCodesTable = $dispositionCodesTable;
        return $this;
    }


}

