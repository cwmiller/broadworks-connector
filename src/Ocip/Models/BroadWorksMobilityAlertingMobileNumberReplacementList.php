<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityAlertingMobileNumberReplacementList
 *
 * A list of Mobile Numbers to be alerted.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:813","type":"sequence"}]
 */
class BroadWorksMobilityAlertingMobileNumberReplacementList
{

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:813
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

