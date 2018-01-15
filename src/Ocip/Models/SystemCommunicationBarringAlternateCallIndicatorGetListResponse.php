<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringAlternateCallIndicatorGetListResponse
 *
 * Response to a SystemCommunicationBarringAlternateCallIndicatorGetListRequest.
 * Contains a table with one row per Communication Barring Alternate Call
 * Indicator.  The table column headings are: "Alternate Call Indicator" and
 * "Network Server Alternate Call Indicator".
 */
class SystemCommunicationBarringAlternateCallIndicatorGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateCallIndicatorTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alternateCallIndicatorTable = null;

    /**
     * Getter for alternateCallIndicatorTable
     *
     * @ElementName alternateCallIndicatorTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAlternateCallIndicatorTable()
    {
        return $this->alternateCallIndicatorTable;
    }

    /**
     * Setter for alternateCallIndicatorTable
     *
     * @ElementName alternateCallIndicatorTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $alternateCallIndicatorTable
     * @return $this
     */
    public function setAlternateCallIndicatorTable($alternateCallIndicatorTable)
    {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        return $this;
    }


}

