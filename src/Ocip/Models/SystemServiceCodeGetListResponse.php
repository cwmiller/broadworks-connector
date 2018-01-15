<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeGetListResponse
 *
 * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 */
class SystemServiceCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceCodeTable = null;

    /**
     * Getter for serviceCodeTable
     *
     * @ElementName serviceCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceCodeTable()
    {
        return $this->serviceCodeTable;
    }

    /**
     * Setter for serviceCodeTable
     *
     * @ElementName serviceCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceCodeTable
     * @return $this
     */
    public function setServiceCodeTable($serviceCodeTable)
    {
        $this->serviceCodeTable = $serviceCodeTable;
        return $this;
    }


}

