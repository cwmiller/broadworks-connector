<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDiversionReasonGetResponse
 *
 * Response to SystemSIPDiversionReasonGetRequest.
 *         Contains a table containing a list of diversion reasons and associated cause values.
 *         The column headings are: "Diversion Reaon", "Cause Value".
 *
 * @see SystemSIPDiversionReasonGetRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:15449","type":"sequence"}]
 */
class SystemSIPDiversionReasonGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName diversionReasonTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:15449
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $diversionReasonTable = null;

    /**
     * Getter for diversionReasonTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDiversionReasonTable()
    {
        return $this->diversionReasonTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->diversionReasonTable;
    }

    /**
     * Setter for diversionReasonTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $diversionReasonTable
     * @return $this
     */
    public function setDiversionReasonTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $diversionReasonTable)
    {
        $this->diversionReasonTable = $diversionReasonTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDiversionReasonTable()
    {
        $this->diversionReasonTable = null;
        return $this;
    }


}

