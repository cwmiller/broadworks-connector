<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetListResponse
 *
 * Response to the ResellerGetListRequest.
 *         Contains a 2 column table with column headings "Reseller Id", "Reseller Name" and "Reseller External Id". A row for each reseller.
 *
 * @see ResellerGetListRequest
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:570","type":"sequence"}]
 */
class ResellerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName resellerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d45e381d6dbac771631649063122a42e:570
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $resellerTable = null;

    /**
     * Getter for resellerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getResellerTable()
    {
        return $this->resellerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerTable;
    }

    /**
     * Setter for resellerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $resellerTable
     * @return $this
     */
    public function setResellerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $resellerTable)
    {
        $this->resellerTable = $resellerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerTable()
    {
        $this->resellerTable = null;
        return $this;
    }
}

