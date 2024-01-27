<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolGetListResponse
 *
 * Response to the SystemBroadWorksMobilityGeographicalPoolGetListRequest.
 *         Contains a table with column headings: “Pool”, "Country Code", "Is Default", “Description”.
 *
 * @see SystemBroadWorksMobilityGeographicalPoolGetListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:794","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName geographicalPoolTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:794
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $geographicalPoolTable = null;

    /**
     * Getter for geographicalPoolTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGeographicalPoolTable()
    {
        return $this->geographicalPoolTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->geographicalPoolTable;
    }

    /**
     * Setter for geographicalPoolTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $geographicalPoolTable
     * @return $this
     */
    public function setGeographicalPoolTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $geographicalPoolTable)
    {
        $this->geographicalPoolTable = $geographicalPoolTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeographicalPoolTable()
    {
        $this->geographicalPoolTable = null;
        return $this;
    }
}

