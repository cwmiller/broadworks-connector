<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeGetListResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeGetListRequest.
 *         Contains a table with column headings: "Country Code", "Service Access Code", "Description".
 *         Replaced by SystemBroadWorksMobilityServiceAccessCodeGetListReponse21.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeGetListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21260","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceAccessCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:21260
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceAccessCodeTable = null;

    /**
     * Getter for serviceAccessCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceAccessCodeTable()
    {
        return $this->serviceAccessCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccessCodeTable;
    }

    /**
     * Setter for serviceAccessCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceAccessCodeTable
     * @return $this
     */
    public function setServiceAccessCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceAccessCodeTable)
    {
        $this->serviceAccessCodeTable = $serviceAccessCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccessCodeTable()
    {
        $this->serviceAccessCodeTable = null;
        return $this;
    }
}

