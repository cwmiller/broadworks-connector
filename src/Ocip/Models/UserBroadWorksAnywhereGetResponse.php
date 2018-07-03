<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetResponse
 *
 * Response to the UserBroadWorksAnywhereGetRequest.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 *         Replaced by: UserBroadWorksAnywhereGetResponse16sp2
 *
 * @see UserBroadWorksAnywhereGetRequest
 * @see UserBroadWorksAnywhereGetResponse16sp2
 */
class UserBroadWorksAnywhereGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertAllLocationsForClickToDialCalls
     * @var bool|null
     */
    private $alertAllLocationsForClickToDialCalls = null;

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
    public function setPhoneNumberTable($phoneNumberTable)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        return $this;
    }


}

