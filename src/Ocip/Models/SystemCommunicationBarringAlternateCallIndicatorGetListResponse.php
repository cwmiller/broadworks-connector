<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringAlternateCallIndicatorGetListResponse
 *
 * Response to a SystemCommunicationBarringAlternateCallIndicatorGetListRequest.
 * Contains a table with one row per Communication Barring Alternate Call
 * Indicator.  The table column headings are: "Alternate Call Indicator" and
 * "Network Server Alternate Call Indicator".
 *
 * @see SystemCommunicationBarringAlternateCallIndicatorGetListRequest
 */
class SystemCommunicationBarringAlternateCallIndicatorGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateCallIndicatorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alternateCallIndicatorTable = null;

    /**
     * Getter for alternateCallIndicatorTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAlternateCallIndicatorTable()
    {
        return $this->alternateCallIndicatorTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicatorTable;
    }

    /**
     * Setter for alternateCallIndicatorTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateCallIndicatorTable
     * @return $this
     */
    public function setAlternateCallIndicatorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateCallIndicatorTable)
    {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicatorTable()
    {
        $this->alternateCallIndicatorTable = null;
        return $this;
    }


}

