<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberGetResponse
 *
 * Response to UserChargeNumberGetRequest.
 *
 * @see UserChargeNumberGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:42460","type":"sequence"}]
 */
class UserChargeNumberGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:42460
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }
}

