<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSpeedDial100GetResponse
 *
 * Response to the UserSpeedDial100GetRequest.
 *
 * @see UserSpeedDial100GetRequest
 * @Groups [{"id":"e084de202cf726c3202fca43390f9ec5:225","type":"sequence"}]
 */
class UserSpeedDial100GetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group e084de202cf726c3202fca43390f9ec5:225
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e084de202cf726c3202fca43390f9ec5:225
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

