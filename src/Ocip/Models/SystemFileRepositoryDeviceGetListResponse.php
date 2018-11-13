<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetListResponse
 *
 * Response to SystemFileRepositoryDeviceGetListRequest.
 *         Contains a table with column headings : "Name","Protocol", "Root
 * Directory", "Extended File Capture Support" in a row for each file repository.
 *
 * @see SystemFileRepositoryDeviceGetListRequest
 */
class SystemFileRepositoryDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

