<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityGetResponse19sp1
 *
 * The response to a GroupBroadWorksMobilityGetRequest19sp1.
 *         
 *         Replaced by: GroupBroadWorksMobilityGetResponse22 in AS data mode
 *
 * @see GroupBroadWorksMobilityGetRequest19sp1
 * @see GroupBroadWorksMobilityGetResponse22
 */
class GroupBroadWorksMobilityGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName enableLocationServices
     * @var bool|null
     */
    private $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @var bool|null
     */
    private $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @var bool|null
     */
    private $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @var bool|null
     */
    private $enableAnnouncementSuppression = null;

    /**
     * Getter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * Getter for enableLocationServices
     *
     * @ElementName enableLocationServices
     * @return bool|null
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices;
    }

    /**
     * Setter for enableLocationServices
     *
     * @ElementName enableLocationServices
     * @param bool|null $enableLocationServices
     * @return $this
     */
    public function setEnableLocationServices($enableLocationServices)
    {
        $this->enableLocationServices = $enableLocationServices;
        return $this;
    }

    /**
     * Getter for enableMSRNLookup
     *
     * @ElementName enableMSRNLookup
     * @return bool|null
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup;
    }

    /**
     * Setter for enableMSRNLookup
     *
     * @ElementName enableMSRNLookup
     * @param bool|null $enableMSRNLookup
     * @return $this
     */
    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $this->enableMSRNLookup = $enableMSRNLookup;
        return $this;
    }

    /**
     * Getter for enableMobileStateChecking
     *
     * @ElementName enableMobileStateChecking
     * @return bool|null
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking;
    }

    /**
     * Setter for enableMobileStateChecking
     *
     * @ElementName enableMobileStateChecking
     * @param bool|null $enableMobileStateChecking
     * @return $this
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @return bool|null
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @param bool|null $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @return bool|null
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @param bool|null $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * Getter for enableAnnouncementSuppression
     *
     * @ElementName enableAnnouncementSuppression
     * @return bool|null
     */
    public function getEnableAnnouncementSuppression()
    {
        return $this->enableAnnouncementSuppression;
    }

    /**
     * Setter for enableAnnouncementSuppression
     *
     * @ElementName enableAnnouncementSuppression
     * @param bool|null $enableAnnouncementSuppression
     * @return $this
     */
    public function setEnableAnnouncementSuppression($enableAnnouncementSuppression)
    {
        $this->enableAnnouncementSuppression = $enableAnnouncementSuppression;
        return $this;
    }


}

