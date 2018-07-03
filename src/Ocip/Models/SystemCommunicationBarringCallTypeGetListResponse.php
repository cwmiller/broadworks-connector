<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCallTypeGetListResponse
 *
 * Response to a SystemCommunicationBarringCallTypeGetListRequest. Contains a table
 * with one row per Communication Barring Call Type.  The table column headings
 * are: "Call Type" and "Network Server Call Type".
 *
 * @see SystemCommunicationBarringCallTypeGetListRequest
 */
class SystemCommunicationBarringCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callTypeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callTypeTable = null;

    /**
     * Getter for callTypeTable
     *
     * @ElementName callTypeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallTypeTable()
    {
        return $this->callTypeTable;
    }

    /**
     * Setter for callTypeTable
     *
     * @ElementName callTypeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callTypeTable
     * @return $this
     */
    public function setCallTypeTable($callTypeTable)
    {
        $this->callTypeTable = $callTypeTable;
        return $this;
    }


}

