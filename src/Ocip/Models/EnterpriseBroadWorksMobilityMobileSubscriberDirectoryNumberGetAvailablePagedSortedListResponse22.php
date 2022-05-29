<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22.
 *         The response contains the number of entries that would be returned if the response was not page size restricted. 
 *         Contains a table with columns: "Mobile Number", "Mobile Network", "Mobile Country Code", "Mobile National Prefix".
 *         The "Mobile Number" column contains a single DN.
 *         The "Mobile Network" column contains the Mobile Network the number belongs to.
 *         The "Mobile Country Code" column indicates the dialing prefix for the mobile number.
 *         The "Mobile National Prefix" column indicates the digit sequence to be dialed before the mobile number.
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListRequest22
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:286","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailablePagedSortedListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:286
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName availableMobileSubscriberDirectoryNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:286
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $availableMobileSubscriberDirectoryNumberTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

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

