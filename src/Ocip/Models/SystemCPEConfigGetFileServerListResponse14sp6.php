<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigGetFileServerListResponse14sp6
 *
 * Response to SystemCPEConfigGetFileServerListRequest14sp6. The table columns are:
 *         "Device Type", "File Repository Name", "Directory", "Extended File Repository Name".
 *
 * @see SystemCPEConfigGetFileServerListRequest14sp6
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7133","type":"sequence"}]
 */
class SystemCPEConfigGetFileServerListResponse14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName fileServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:7133
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

