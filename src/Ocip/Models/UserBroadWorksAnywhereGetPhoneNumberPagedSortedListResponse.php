<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetPhoneNumberPagedSortedListResponse
 *
 * Response to the UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest.
 *         The phoneNumberTable contains columns: "Phone Number", "Description", "Activated"
 *
 * @see UserBroadWorksAnywhereGetPhoneNumberPagedSortedListRequest
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:415","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetPhoneNumberPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f39163d0e42e05c4a1692a62f625df9f:415
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $phoneNumberTable = null;

    /**
     * Getter for phoneNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberTable;
    }

    /**
     * Setter for phoneNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable
     * @return $this
     */
    public function setPhoneNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberTable()
    {
        $this->phoneNumberTable = null;
        return $this;
    }
}

