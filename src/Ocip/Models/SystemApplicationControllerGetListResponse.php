<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemApplicationControllerGetListResponse
 *
 * Response to the SystemApplicationControllerGetListRequest.
 *       Contains a table with column headings: "Name", "Subscriber Id", "Channel Set Id", "Status".
 *       The column values for "Status" can either be "ready" or "notReady".
 *
 * @see SystemApplicationControllerGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1914","type":"sequence"}]
 */
class SystemApplicationControllerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationControllerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1914
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $applicationControllerTable = null;

    /**
     * Getter for applicationControllerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getApplicationControllerTable()
    {
        return $this->applicationControllerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationControllerTable;
    }

    /**
     * Setter for applicationControllerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $applicationControllerTable
     * @return $this
     */
    public function setApplicationControllerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $applicationControllerTable)
    {
        $this->applicationControllerTable = $applicationControllerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationControllerTable()
    {
        $this->applicationControllerTable = null;
        return $this;
    }


}

