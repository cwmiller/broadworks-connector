<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsSchemaInstanceGetListResponse
 *
 * Response to SystemEnhancedCallLogsSchemaInstanceGetListRequest.
 *       Contains a table with column headings: "Instance Name", "Actual Users", "Potential Users".
 *
 * @see SystemEnhancedCallLogsSchemaInstanceGetListRequest
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:304","type":"sequence"}]
 */
class SystemEnhancedCallLogsSchemaInstanceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName schemaInstanceUsageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:304
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $schemaInstanceUsageTable = null;

    /**
     * Getter for schemaInstanceUsageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSchemaInstanceUsageTable()
    {
        return $this->schemaInstanceUsageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->schemaInstanceUsageTable;
    }

    /**
     * Setter for schemaInstanceUsageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $schemaInstanceUsageTable
     * @return $this
     */
    public function setSchemaInstanceUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $schemaInstanceUsageTable)
    {
        $this->schemaInstanceUsageTable = $schemaInstanceUsageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSchemaInstanceUsageTable()
    {
        $this->schemaInstanceUsageTable = null;
        return $this;
    }
}

