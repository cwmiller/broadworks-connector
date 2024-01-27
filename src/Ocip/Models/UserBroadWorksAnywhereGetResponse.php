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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:40356","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName alertAllLocationsForClickToDialCalls
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:40356
     * @var bool|null
     */
    protected $alertAllLocationsForClickToDialCalls = null;

    /**
     * @ElementName phoneNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:40356
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $phoneNumberTable = null;

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

