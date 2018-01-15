<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDiversionReasonGetResponse
 *
 * Response to SystemSIPDiversionReasonGetRequest.
 *         Contains a table containing a list of diversion reasons and associated
 * cause values.
 *         The column headings are: "Diversion Reaon", "Cause Value".
 */
class SystemSIPDiversionReasonGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName diversionReasonTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $diversionReasonTable = null;

    /**
     * Getter for diversionReasonTable
     *
     * @ElementName diversionReasonTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDiversionReasonTable()
    {
        return $this->diversionReasonTable;
    }

    /**
     * Setter for diversionReasonTable
     *
     * @ElementName diversionReasonTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $diversionReasonTable
     * @return $this
     */
    public function setDiversionReasonTable($diversionReasonTable)
    {
        $this->diversionReasonTable = $diversionReasonTable;
        return $this;
    }


}

