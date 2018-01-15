<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityUserMobileIdentityModifyEntry
 *
 * User's Mobile Identity Modify Entry
 */
class BroadWorksMobilityUserMobileIdentityModifyEntry
{

    /**
     * @ElementName mobileNumber
     * @var string|null
     */
    private $mobileNumber = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName isPrimary
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * @ElementName enableAlerting
     * @var bool|null
     */
    private $enableAlerting = null;

    /**
     * Getter for mobileNumber
     *
     * @ElementName mobileNumber
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @ElementName mobileNumber
     * @param string|null $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
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

    /**
     * Getter for isPrimary
     *
     * @ElementName isPrimary
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * @ElementName isPrimary
     * @param bool|null $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * Getter for enableAlerting
     *
     * @ElementName enableAlerting
     * @return bool|null
     */
    public function getEnableAlerting()
    {
        return $this->enableAlerting;
    }

    /**
     * Setter for enableAlerting
     *
     * @ElementName enableAlerting
     * @param bool|null $enableAlerting
     * @return $this
     */
    public function setEnableAlerting($enableAlerting)
    {
        $this->enableAlerting = $enableAlerting;
        return $this;
    }


}

