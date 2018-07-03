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
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $schemaInstanceUsageTable = null;

    /**
     * Getter for schemaInstanceUsageTable
     *
     * @ElementName schemaInstanceUsageTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSchemaInstanceUsageTable()
    {
        return $this->schemaInstanceUsageTable;
    }

    /**
     * Setter for schemaInstanceUsageTable
     *
     * @ElementName schemaInstanceUsageTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $schemaInstanceUsageTable
     * @return $this
     */
    public function setSchemaInstanceUsageTable($schemaInstanceUsageTable)
    {
        $this->schemaInstanceUsageTable = $schemaInstanceUsageTable;
        return $this;
    }


}

