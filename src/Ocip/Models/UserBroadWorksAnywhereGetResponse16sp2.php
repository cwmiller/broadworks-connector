<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetResponse16sp2
 *
 * Response to the UserBroadWorksAnywhereGetRequest16sp2.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 *
 * @see UserBroadWorksAnywhereGetRequest16sp2
 */
class UserBroadWorksAnywhereGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertAllLocationsForClickToDialCalls
     * @var bool|null
     */
    private $alertAllLocationsForClickToDialCalls = null;

    /**
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @var bool|null
     */
    private $alertAllLocationsForGroupPagingCalls = null;

    /**
     * @ElementName phoneNumberTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $phoneNumberTable = null;

    /**
     * Getter for alertAllLocationsForClickToDialCalls
     *
     * @ElementName alertAllLocationsForClickToDialCalls
     * @return bool|null
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return $this->alertAllLocationsForClickToDialCalls;
    }

    /**
     * Setter for alertAllLocationsForClickToDialCalls
     *
     * @ElementName alertAllLocationsForClickToDialCalls
     * @param bool|null $alertAllLocationsForClickToDialCalls
     * @return $this
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls)
    {
        $this->alertAllLocationsForClickToDialCalls = $alertAllLocationsForClickToDialCalls;
        return $this;
    }

    /**
     * Getter for alertAllLocationsForGroupPagingCalls
     *
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @return bool|null
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return $this->alertAllLocationsForGroupPagingCalls;
    }

    /**
     * Setter for alertAllLocationsForGroupPagingCalls
     *
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @param bool|null $alertAllLocationsForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls)
    {
        $this->alertAllLocationsForGroupPagingCalls = $alertAllLocationsForGroupPagingCalls;
        return $this;
    }

    /**
     * Getter for phoneNumberTable
     *
     * @ElementName phoneNumberTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable;
    }

    /**
     * Setter for phoneNumberTable
     *
     * @ElementName phoneNumberTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $phoneNumberTable
     * @return $this
     */
    public function setPhoneNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }


}

