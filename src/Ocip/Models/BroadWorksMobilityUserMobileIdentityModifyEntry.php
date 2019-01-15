<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * BroadWorksMobilityUserMobileIdentityModifyEntry
 *
 * User's Mobile Identity Modify Entry
 *
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1658","type":"sequence"}]
 */
class BroadWorksMobilityUserMobileIdentityModifyEntry
{

    /**
     * @ElementName mobileNumber
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1658
     * @var string|null
     */
    private $mobileNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1658
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1658
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * @ElementName enableAlerting
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1658
     * @var bool|null
     */
    private $enableAlerting = null;

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
    public function setDescription($description = null)
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

