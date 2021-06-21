<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCallTypeGetListResponse
 *
 * Response to a SystemCommunicationBarringCallTypeGetListRequest. Contains a table with one row per Communication Barring Call Type.  The table column headings are: "Call Type" and "Network Server Call Type".
 *
 * @see SystemCommunicationBarringCallTypeGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5664","type":"sequence"}]
 */
class SystemCommunicationBarringCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5664
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callTypeTable = null;

    /**
     * Getter for callTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallTypeTable()
    {
        return $this->callTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTypeTable;
    }

    /**
     * Setter for callTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeTable
     * @return $this
     */
    public function setCallTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callTypeTable)
    {
        $this->callTypeTable = $callTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTypeTable()
    {
        $this->callTypeTable = null;
        return $this;
    }


}

