<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigGetFileServerListResponse14sp6
 *
 * Response to SystemCPEConfigGetFileServerListRequest14sp6. The table columns are:
 *         "Device Type", "File Repository Name", "Directory", "Extended File
 * Repository Name".
 */
class SystemCPEConfigGetFileServerListResponse14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $fileServerTable = null;

    /**
     * Getter for fileServerTable
     *
     * @ElementName fileServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getFileServerTable()
    {
        return $this->fileServerTable;
    }

    /**
     * Setter for fileServerTable
     *
     * @ElementName fileServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $fileServerTable
     * @return $this
     */
    public function setFileServerTable($fileServerTable)
    {
        $this->fileServerTable = $fileServerTable;
        return $this;
    }


}

