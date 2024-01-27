<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityAlertingMobileNumberReplacementList
 *
 * A list of Mobile Numbers to be alerted.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:940","type":"sequence"}]
 */
class BroadWorksMobilityAlertingMobileNumberReplacementList
{
    /**
     * @ElementName mobileNumber
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:940
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $mobileNumber = [
        
    ];

    /**
     * Getter for mobileNumber
     *
     * @return string[]
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @param string[] $mobileNumber
     * @return $this
     */
    public function setMobileNumber(array $mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNumber()
    {
        $this->mobileNumber = null;
        return $this;
    }

    /**
     * Adder for mobileNumber
     *
     * @param string $mobileNumber
     * @return $this
     */
    public function addMobileNumber(string $mobileNumber)
    {
        $this->mobileNumber[] = $mobileNumber;
        return $this;
    }
}

