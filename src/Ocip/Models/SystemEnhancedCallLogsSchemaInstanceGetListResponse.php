<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsSchemaInstanceGetListResponse
 *
 * Response to SystemEnhancedCallLogsSchemaInstanceGetListRequest.
 *       Contains a table with column headings: "Instance Name", "Actual Users",
 * "Potential Users".
 *
 * @see SystemEnhancedCallLogsSchemaInstanceGetListRequest
 */
class SystemEnhancedCallLogsSchemaInstanceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName schemaInstanceUsageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $schemaInstanceUsageTable = null;

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

