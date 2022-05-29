<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest.
 *         The response contains a table with columns: "Mobile Number", "Mobile Network", "Mobile Country Code", 
 *         "Mobile National Prefix".
 *         The "Mobile Number" column contains a single DN.
 *         The "Mobile Network" column contains the Mobile Network the number belongs to.
 *         The "Mobile Country Code" column indicates the dialing prefix for the mobile number.
 *         The "Mobile National Prefix" column indicates the digit sequence to be dialed before the mobile number.
 *         Replaced by: EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2049","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableMobileSubscriberDirectoryNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2049
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $availableMobileSubscriberDirectoryNumberTable = null;

    /**
     * Getter for availableMobileSubscriberDirectoryNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAvailableMobileSubscriberDirectoryNumberTable()
    {
        return $this->availableMobileSubscriberDirectoryNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableMobileSubscriberDirectoryNumberTable;
    }

    /**
     * Setter for availableMobileSubscriberDirectoryNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableMobileSubscriberDirectoryNumberTable
     * @return $this
     */
    public function setAvailableMobileSubscriberDirectoryNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableMobileSubscriberDirectoryNumberTable)
    {
        $this->availableMobileSubscriberDirectoryNumberTable = $availableMobileSubscriberDirectoryNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableMobileSubscriberDirectoryNumberTable()
    {
        $this->availableMobileSubscriberDirectoryNumberTable = null;
        return $this;
    }


}

