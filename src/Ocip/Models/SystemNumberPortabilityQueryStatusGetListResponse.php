<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetListResponse
 *
 * Response to the SystemNumberPortabilityQueryStatusGetListRequest.
 *         Contains a table with column headings:
 *         "Status and Treatment File Name".
 *
 * @see SystemNumberPortabilityQueryStatusGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12126","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12126
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $statusTable = null;

    /**
     * Getter for statusTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getStatusTable()
    {
        return $this->statusTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusTable;
    }

    /**
     * Setter for statusTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusTable
     * @return $this
     */
    public function setStatusTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusTable)
    {
        $this->statusTable = $statusTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusTable()
    {
        $this->statusTable = null;
        return $this;
    }


}

