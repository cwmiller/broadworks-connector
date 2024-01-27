<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServicePhoneNumberLookupResponse
 *
 * Response to the SystemServicePhoneNumberLookupRequest.
 *         The column headings for the userTable are: "Service Provider Id", "Is Enterprise", "Group Id", "User Id",
 *         "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number" and "Extension".
 *
 * @see SystemServicePhoneNumberLookupRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16439","type":"sequence"}]
 */
class SystemServicePhoneNumberLookupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:16439
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }
}

