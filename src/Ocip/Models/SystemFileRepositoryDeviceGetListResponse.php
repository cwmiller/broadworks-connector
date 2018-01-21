<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetListResponse
 *
 * Response to SystemFileRepositoryDeviceGetListRequest.
 *         Contains a table with column headings : "Name","Protocol", "Root
 * Directory", "Extended File Capture Support" in a row for each file repository.
 */
class SystemFileRepositoryDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $fileRepositoryTable = null;

    /**
     * Getter for fileRepositoryTable
     *
     * @ElementName fileRepositoryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getFileRepositoryTable()
    {
        return $this->fileRepositoryTable;
    }

    /**
     * Setter for fileRepositoryTable
     *
     * @ElementName fileRepositoryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $fileRepositoryTable
     * @return $this
     */
    public function setFileRepositoryTable($fileRepositoryTable)
    {
        $this->fileRepositoryTable = $fileRepositoryTable;
        return $this;
    }


}

