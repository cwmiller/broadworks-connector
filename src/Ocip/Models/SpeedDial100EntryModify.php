<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SpeedDial100EntryModify
 *
 * Modify the speed dial 100 prefix setting for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SpeedDial100EntryModify
{

    /**
     * @ElementName speedCode
     * @var int|null
     */
    private $speedCode = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for speedCode
     *
     * @ElementName speedCode
     * @return int|null
     */
    public function getSpeedCode()
    {
        return $this->speedCode;
    }

    /**
     * Setter for speedCode
     *
     * @ElementName speedCode
     * @param int|null $speedCode
     * @return $this
     */
    public function setSpeedCode($speedCode)
    {
        $this->speedCode = $speedCode;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

