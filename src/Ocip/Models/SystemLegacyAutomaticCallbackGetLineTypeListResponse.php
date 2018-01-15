<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLegacyAutomaticCallbackGetLineTypeListResponse
 *
 * Response to SystemLegacyAutomaticCallbackGetLineTypeListRequest. Returns a 3
 * column
 *         table with column headings: "Line Type", "Match" and "No Match". The
 * possible values
 *         for the "Match" and "No Match" columns are "Accept" and "Deny".
 */
class SystemLegacyAutomaticCallbackGetLineTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lineTypeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $lineTypeTable = null;

    /**
     * Getter for lineTypeTable
     *
     * @ElementName lineTypeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLineTypeTable()
    {
        return $this->lineTypeTable;
    }

    /**
     * Setter for lineTypeTable
     *
     * @ElementName lineTypeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $lineTypeTable
     * @return $this
     */
    public function setLineTypeTable($lineTypeTable)
    {
        $this->lineTypeTable = $lineTypeTable;
        return $this;
    }


}

