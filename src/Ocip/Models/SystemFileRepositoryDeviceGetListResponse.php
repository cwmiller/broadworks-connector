<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetListResponse
 *
 * Response to SystemFileRepositoryDeviceGetListRequest.
 *         Contains a table with column headings : "Name","Protocol", "Root Directory", "Extended File Capture Support" in a row for each file repository.
 *
 * @see SystemFileRepositoryDeviceGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10307","type":"sequence"}]
 */
class SystemFileRepositoryDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10307
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $fileRepositoryTable = null;

    /**
     * Getter for fileRepositoryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getFileRepositoryTable()
    {
        return $this->fileRepositoryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryTable;
    }

    /**
     * Setter for fileRepositoryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileRepositoryTable
     * @return $this
     */
    public function setFileRepositoryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileRepositoryTable)
    {
        $this->fileRepositoryTable = $fileRepositoryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryTable()
    {
        $this->fileRepositoryTable = null;
        return $this;
    }


}

