<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeGetListResponse21
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeGetListRequest21.
 *         Contains a table with column headings: "Country Code", "Service Access
 * Code", "Description"
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeGetListRequest21
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceAccessCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceAccessCodeTable = null;

    /**
     * Getter for serviceAccessCodeTable
     *
     * @ElementName serviceAccessCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceAccessCodeTable()
    {
        return $this->serviceAccessCodeTable;
    }

    /**
     * Setter for serviceAccessCodeTable
     *
     * @ElementName serviceAccessCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceAccessCodeTable
     * @return $this
     */
    public function setServiceAccessCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceAccessCodeTable)
    {
        $this->serviceAccessCodeTable = $serviceAccessCodeTable;
        return $this;
    }


}

