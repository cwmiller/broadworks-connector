<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigGetFileServerListResponse
 *
 * Response to SystemCPEConfigGetFileServerListRequest. The table columns are:
 *         "Device Type", "FTP Host Net Address", "FTP User Id", "Directory" and "Passive FTP".
 *         Replaced By: SystemCPEConfigGetFileServerListResponse14sp6
 *
 * @see SystemCPEConfigGetFileServerListRequest
 * @see SystemCPEConfigGetFileServerListResponse14sp6
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:25384","type":"sequence"}]
 */
class SystemCPEConfigGetFileServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25384
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $fileServerTable = null;

    /**
     * Getter for fileServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getFileServerTable()
    {
        return $this->fileServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileServerTable;
    }

    /**
     * Setter for fileServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileServerTable
     * @return $this
     */
    public function setFileServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileServerTable)
    {
        $this->fileServerTable = $fileServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileServerTable()
    {
        $this->fileServerTable = null;
        return $this;
    }


}

