<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServicePhoneNumberLookupResponse
 *
 * Response to the SystemServicePhoneNumberLookupRequest.
 *         The column headings for the userTable are: "Service Provider Id", "Is
 * Enterprise", "Group Id", "User Id",
 *         "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 * "Phone Number" and "Extension".
 *
 * @see SystemServicePhoneNumberLookupRequest
 */
class SystemServicePhoneNumberLookupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

