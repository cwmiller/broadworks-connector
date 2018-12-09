<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityAlertingMobileNumberReplacementList
 *
 * A list of Mobile Numbers to be alerted.
 *         By convention, an element of this type may be set nil to clear the list.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:569","type":"sequence"}]
 */
class BroadWorksMobilityAlertingMobileNumberReplacementList
{

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Array
     * @Group 8e629edbac315ae7889caca732382c44:569
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

