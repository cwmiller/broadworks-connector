<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SpeedDial100EntryModify
 *
 * Modify the speed dial 100 prefix setting for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SpeedDial100EntryModify
{

    /**
     * @ElementName speedCode
     * @Type int
     * @var int|null
     */
    private $speedCode = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * Getter for speedCode
     *
     * @return int
     */
    public function getSpeedCode()
    {
        return $this->speedCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->speedCode;
    }

    /**
     * Setter for speedCode
     *
     * @param int $speedCode
     * @return $this
     */
    public function setSpeedCode($speedCode)
    {
        $this->speedCode = $speedCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpeedCode()
    {
        $this->speedCode = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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

