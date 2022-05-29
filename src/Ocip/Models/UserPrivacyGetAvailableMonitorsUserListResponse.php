<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetAvailableMonitorsUserListResponse
 *
 * Response to the UserPrivacyGetAvailableMonitorsUserListRequest.
 *         Returns a 10 column table with column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @see UserPrivacyGetAvailableMonitorsUserListRequest
 * @Groups [{"id":"b87b6355d5858fdbeb8c1eb05dc1651a:128","type":"sequence"}]
 */
class UserPrivacyGetAvailableMonitorsUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableMonitorsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:128
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $availableMonitorsTable = null;

    /**
     * Getter for availableMonitorsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAvailableMonitorsTable()
    {
        return $this->availableMonitorsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableMonitorsTable;
    }

    /**
     * Setter for availableMonitorsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableMonitorsTable
     * @return $this
     */
    public function setAvailableMonitorsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableMonitorsTable)
    {
        $this->availableMonitorsTable = $availableMonitorsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableMonitorsTable()
    {
        $this->availableMonitorsTable = null;
        return $this;
    }


}

