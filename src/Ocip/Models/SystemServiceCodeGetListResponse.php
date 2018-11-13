<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeGetListResponse
 *
 * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 *
 * @see SystemServiceCodeGetListRequest
 */
class SystemServiceCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceCodeTable = null;

    /**
     * Getter for serviceCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceCodeTable()
    {
        return $this->serviceCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCodeTable;
    }

    /**
     * Setter for serviceCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceCodeTable
     * @return $this
     */
    public function setServiceCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceCodeTable)
    {
        $this->serviceCodeTable = $serviceCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCodeTable()
    {
        $this->serviceCodeTable = null;
        return $this;
    }


}

