<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLegacyAutomaticCallbackGetLineTypeListResponse
 *
 * Response to SystemLegacyAutomaticCallbackGetLineTypeListRequest. Returns a 3 column
 *         table with column headings: "Line Type", "Match" and "No Match". The possible values
 *         for the "Match" and "No Match" columns are "Accept" and "Deny".
 *
 * @see SystemLegacyAutomaticCallbackGetLineTypeListRequest
 * @Groups [{"id":"6bf3c0ead6c4d948122ea83af7fc6e34:63","type":"sequence"}]
 */
class SystemLegacyAutomaticCallbackGetLineTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lineTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6bf3c0ead6c4d948122ea83af7fc6e34:63
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $lineTypeTable = null;

    /**
     * Getter for lineTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLineTypeTable()
    {
        return $this->lineTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lineTypeTable;
    }

    /**
     * Setter for lineTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $lineTypeTable
     * @return $this
     */
    public function setLineTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $lineTypeTable)
    {
        $this->lineTypeTable = $lineTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLineTypeTable()
    {
        $this->lineTypeTable = null;
        return $this;
    }


}

