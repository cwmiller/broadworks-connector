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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17720","type":"sequence"}]
 */
class SystemSIPDiversionReasonGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName diversionReasonTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:17720
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $diversionReasonTable = null;

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

