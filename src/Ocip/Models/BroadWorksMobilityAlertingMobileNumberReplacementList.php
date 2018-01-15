<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityAlertingMobileNumberReplacementList
 *
 * A list of Mobile Numbers to be alerted.
 *         By convention, an element of this type may be set nil to clear the list.
 */
class BroadWorksMobilityAlertingMobileNumberReplacementList
{

    /**
     * @ElementName mobileNumber
     * @var string[]
     */
    private $mobileNumber = array(
        
    );

    /**
     * Getter for mobileNumber
     *
     * @ElementName mobileNumber
     * @return string[]
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @ElementName mobileNumber
     * @param string[] $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * Adder for mobileNumber
     *
     * @ElementName mobileNumber
     * @param string $mobileNumber
     * @return $this
     */
    public function addMobileNumber($mobileNumber)
    {
        $this->mobileNumber []= $mobileNumber;
        return $this;
    }


}

