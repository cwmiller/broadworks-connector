<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetResponse16sp2
 *
 * Response to the UserBroadWorksAnywhereGetRequest16sp2.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 *
 * @see UserBroadWorksAnywhereGetRequest16sp2
 * @Groups [{"id":"b2dd0919a492fbd36c0e7f346f843ff2:448","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertAllLocationsForClickToDialCalls
     * @Type bool
     * @Group b2dd0919a492fbd36c0e7f346f843ff2:448
     * @var bool|null
     */
    private $alertAllLocationsForClickToDialCalls = null;

    /**
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @Type bool
     * @Group b2dd0919a492fbd36c0e7f346f843ff2:448
     * @var bool|null
     */
    private $alertAllLocationsForGroupPagingCalls = null;

    /**
     * @ElementName phoneNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b2dd0919a492fbd36c0e7f346f843ff2:448
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $phoneNumberTable = null;

    /**
     * Getter for alertAllLocationsForClickToDialCalls
     *
     * @return bool
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return $this->alertAllLocationsForClickToDialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAllLocationsForClickToDialCalls;
    }

    /**
     * Setter for alertAllLocationsForClickToDialCalls
     *
     * @param bool $alertAllLocationsForClickToDialCalls
     * @return $this
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls)
    {
        $this->alertAllLocationsForClickToDialCalls = $alertAllLocationsForClickToDialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAllLocationsForClickToDialCalls()
    {
        $this->alertAllLocationsForClickToDialCalls = null;
        return $this;
    }

    /**
     * Getter for alertAllLocationsForGroupPagingCalls
     *
     * @return bool
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return $this->alertAllLocationsForGroupPagingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAllLocationsForGroupPagingCalls;
    }

    /**
     * Setter for alertAllLocationsForGroupPagingCalls
     *
     * @param bool $alertAllLocationsForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls)
    {
        $this->alertAllLocationsForGroupPagingCalls = $alertAllLocationsForGroupPagingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAllLocationsForGroupPagingCalls()
    {
        $this->alertAllLocationsForGroupPagingCalls = null;
        return $this;
    }

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

