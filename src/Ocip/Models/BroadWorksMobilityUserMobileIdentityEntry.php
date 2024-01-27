<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityUserMobileIdentityEntry
 *
 * User's Mobile Identity Read Entry
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:48496","type":"sequence"}]
 */
class BroadWorksMobilityUserMobileIdentityEntry
{
    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:48496
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $mobileNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:48496
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:48496
     * @var bool|null
     */
    protected $isPrimary = null;

    /**
     * @ElementName enableAlerting
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:48496
     * @var bool|null
     */
    protected $enableAlerting = null;

    /**
     * Getter for mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNumber;
    }

    /**
     * Setter for mobileNumber
     *
     * @param string $mobileNumber
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
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

    /**
     * Getter for isPrimary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * @param bool $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPrimary()
    {
        $this->isPrimary = null;
        return $this;
    }

    /**
     * Getter for enableAlerting
     *
     * @return bool
     */
    public function getEnableAlerting()
    {
        return $this->enableAlerting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAlerting;
    }

    /**
     * Setter for enableAlerting
     *
     * @param bool $enableAlerting
     * @return $this
     */
    public function setEnableAlerting($enableAlerting)
    {
        $this->enableAlerting = $enableAlerting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAlerting()
    {
        $this->enableAlerting = null;
        return $this;
    }
}

