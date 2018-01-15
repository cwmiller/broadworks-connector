<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigGetFileServerListResponse
 *
 * Response to SystemCPEConfigGetFileServerListRequest. The table columns are:
 *         "Device Type", "FTP Host Net Address", "FTP User Id", "Directory" and
 * "Passive FTP".
 *         Replaced By: SystemCPEConfigGetFileServerListResponse14sp6
 */
class SystemCPEConfigGetFileServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

