<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetListResponse
 *
 * Response to the ResellerGetListRequest.
 *         Contains a 2 column table with column headings "Reseller Id", "Reseller
 * Name". A row for each reseller.
 *
 * @see ResellerGetListRequest
 */
class ResellerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $resellerTable = null;

    /**
     * Getter for resellerTable
     *
     * @ElementName resellerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getResellerTable()
    {
        return $this->resellerTable;
    }

    /**
     * Setter for resellerTable
     *
     * @ElementName resellerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $resellerTable
     * @return $this
     */
    public function setResellerTable($resellerTable)
    {
        $this->resellerTable = $resellerTable;
        return $this;
    }


}

