<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPerformanceMeasurementReportingGetFileServerListResponse22
 *
 * Response to SystemPerformanceMeasurementReportingGetFileServerListRequest22. The table columns are:
 *         "Repository URL", "User Id", "Passive".
 *
 * @see SystemPerformanceMeasurementReportingGetFileServerListRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14345","type":"sequence"}]
 */
class SystemPerformanceMeasurementReportingGetFileServerListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14345
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $fileServerTable = null;

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

