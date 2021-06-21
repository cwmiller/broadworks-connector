<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeGetListResponse21
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeGetListRequest21.
 *         Contains a table with column headings: "Country Code", "Service Access Code", "Description"
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeGetListRequest21
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1333","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceAccessCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1333
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceAccessCodeTable = null;

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

