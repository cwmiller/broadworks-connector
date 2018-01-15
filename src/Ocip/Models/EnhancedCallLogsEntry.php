<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsEntry
 *
 * Call Log entry describing a placed, received, or missed call.
 *        Replaced By: CallLogsEntry
 */
class EnhancedCallLogsEntry
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName time
     * @var string|null
     */
    private $time = null;

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for time
     *
     * @ElementName time
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Setter for time
     *
     * @ElementName time
     * @param string|null $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }


}

