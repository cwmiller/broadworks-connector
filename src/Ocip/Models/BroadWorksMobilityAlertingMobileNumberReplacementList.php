<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityAlertingMobileNumberReplacementList
 *
 * A list of Mobile Numbers to be alerted.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:569","type":"sequence"}]
 */
class BroadWorksMobilityAlertingMobileNumberReplacementList
{

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:569
     * @var string[]
     */
    private $mobileNumber = array(
        
    );

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

