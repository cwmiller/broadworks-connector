<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse22
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22.
 *         The response contains a table with columns: "Phone Number", "E164 Phone Number".
 *
 *         The "Phone Number" column contains Mobile Subscriber DNs not yet assigned to any user.
 *         The "E164 Phone Number" column contains Mobile Subscriber DNs not yet assigned to any user in E.164 format.
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest22
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:238","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableMobileSubscriberDirectoryNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:238
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

