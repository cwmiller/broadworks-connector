<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetAvailableMonitorsUserListResponse
 *
 * Response to the UserPrivacyGetAvailableMonitorsUserListRequest.
 *         Returns a 10 column table with column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email
 * Address", "IMP Id".
 *
 * @see UserPrivacyGetAvailableMonitorsUserListRequest
 */
class UserPrivacyGetAvailableMonitorsUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableMonitorsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $availableMonitorsTable = null;

    /**
     * Getter for availableMonitorsTable
     *
     * @ElementName availableMonitorsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAvailableMonitorsTable()
    {
        return $this->availableMonitorsTable;
    }

    /**
     * Setter for availableMonitorsTable
     *
     * @ElementName availableMonitorsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $availableMonitorsTable
     * @return $this
     */
    public function setAvailableMonitorsTable($availableMonitorsTable)
    {
        $this->availableMonitorsTable = $availableMonitorsTable;
        return $this;
    }


}

