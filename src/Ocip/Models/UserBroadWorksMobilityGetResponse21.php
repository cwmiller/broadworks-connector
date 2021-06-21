<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetResponse21
 *
 * Response to a UserBroadWorksMobilityGetRequest21.
 *
 * @see UserBroadWorksMobilityGetRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:39768","type":"sequence"}]
 */
class UserBroadWorksMobilityGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName useMobileIdentityCallAnchoring
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var bool|null
     */
    private $useMobileIdentityCallAnchoring = null;

    /**
     * @ElementName preventCallsToOwnMobiles
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var bool|null
     */
    private $preventCallsToOwnMobiles = null;

    /**
     * @ElementName mobileIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry[]
     */
    private $mobileIdentity = array(
        
    );

    /**
     * @ElementName profileIdentityDevicesToRing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    private $profileIdentityDevicesToRing = null;

    /**
     * @ElementName profileIdentityIncludeSharedCallAppearance
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var bool|null
     */
    private $profileIdentityIncludeSharedCallAppearance = null;

    /**
     * @ElementName profileIdentityIncludeBroadworksAnywhere
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var bool|null
     */
    private $profileIdentityIncludeBroadworksAnywhere = null;

    /**
     * @ElementName profileIdentityIncludeExecutiveAssistant
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @var bool|null
     */
    private $profileIdentityIncludeExecutiveAssistant = null;

    /**
     * @ElementName profileIdentityMobileNumberAlerted
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39768
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    private $profileIdentityMobileNumberAlerted = array(
        
    );

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for useMobileIdentityCallAnchoring
     *
     * @return bool
     */
    public function getUseMobileIdentityCallAnchoring()
    {
        return $this->useMobileIdentityCallAnchoring instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMobileIdentityCallAnchoring;
    }

    /**
     * Setter for useMobileIdentityCallAnchoring
     *
     * @param bool $useMobileIdentityCallAnchoring
     * @return $this
     */
    public function setUseMobileIdentityCallAnchoring($useMobileIdentityCallAnchoring)
    {
        $this->useMobileIdentityCallAnchoring = $useMobileIdentityCallAnchoring;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMobileIdentityCallAnchoring()
    {
        $this->useMobileIdentityCallAnchoring = null;
        return $this;
    }

    /**
     * Getter for preventCallsToOwnMobiles
     *
     * @return bool
     */
    public function getPreventCallsToOwnMobiles()
    {
        return $this->preventCallsToOwnMobiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preventCallsToOwnMobiles;
    }

    /**
     * Setter for preventCallsToOwnMobiles
     *
     * @param bool $preventCallsToOwnMobiles
     * @return $this
     */
    public function setPreventCallsToOwnMobiles($preventCallsToOwnMobiles)
    {
        $this->preventCallsToOwnMobiles = $preventCallsToOwnMobiles;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreventCallsToOwnMobiles()
    {
        $this->preventCallsToOwnMobiles = null;
        return $this;
    }

    /**
     * Getter for mobileIdentity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry[]
     */
    public function getMobileIdentity()
    {
        return $this->mobileIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileIdentity;
    }

    /**
     * Setter for mobileIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry[] $mobileIdentity
     * @return $this
     */
    public function setMobileIdentity(array $mobileIdentity)
    {
        $this->mobileIdentity = $mobileIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileIdentity()
    {
        $this->mobileIdentity = null;
        return $this;
    }

    /**
     * Adder for mobileIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry $mobileIdentity
     * @return $this
     */
    public function addMobileIdentity($mobileIdentity)
    {
        $this->mobileIdentity[] = $mobileIdentity;
        return $this;
    }

    /**
     * Getter for profileIdentityDevicesToRing
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     */
    public function getProfileIdentityDevicesToRing()
    {
        return $this->profileIdentityDevicesToRing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityDevicesToRing;
    }

    /**
     * Setter for profileIdentityDevicesToRing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing $profileIdentityDevicesToRing
     * @return $this
     */
    public function setProfileIdentityDevicesToRing(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing $profileIdentityDevicesToRing)
    {
        $this->profileIdentityDevicesToRing = $profileIdentityDevicesToRing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityDevicesToRing()
    {
        $this->profileIdentityDevicesToRing = null;
        return $this;
    }

    /**
     * Getter for profileIdentityIncludeSharedCallAppearance
     *
     * @return bool
     */
    public function getProfileIdentityIncludeSharedCallAppearance()
    {
        return $this->profileIdentityIncludeSharedCallAppearance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityIncludeSharedCallAppearance;
    }

    /**
     * Setter for profileIdentityIncludeSharedCallAppearance
     *
     * @param bool $profileIdentityIncludeSharedCallAppearance
     * @return $this
     */
    public function setProfileIdentityIncludeSharedCallAppearance($profileIdentityIncludeSharedCallAppearance)
    {
        $this->profileIdentityIncludeSharedCallAppearance = $profileIdentityIncludeSharedCallAppearance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityIncludeSharedCallAppearance()
    {
        $this->profileIdentityIncludeSharedCallAppearance = null;
        return $this;
    }

    /**
     * Getter for profileIdentityIncludeBroadworksAnywhere
     *
     * @return bool
     */
    public function getProfileIdentityIncludeBroadworksAnywhere()
    {
        return $this->profileIdentityIncludeBroadworksAnywhere instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityIncludeBroadworksAnywhere;
    }

    /**
     * Setter for profileIdentityIncludeBroadworksAnywhere
     *
     * @param bool $profileIdentityIncludeBroadworksAnywhere
     * @return $this
     */
    public function setProfileIdentityIncludeBroadworksAnywhere($profileIdentityIncludeBroadworksAnywhere)
    {
        $this->profileIdentityIncludeBroadworksAnywhere = $profileIdentityIncludeBroadworksAnywhere;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityIncludeBroadworksAnywhere()
    {
        $this->profileIdentityIncludeBroadworksAnywhere = null;
        return $this;
    }

    /**
     * Getter for profileIdentityIncludeExecutiveAssistant
     *
     * @return bool
     */
    public function getProfileIdentityIncludeExecutiveAssistant()
    {
        return $this->profileIdentityIncludeExecutiveAssistant instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityIncludeExecutiveAssistant;
    }

    /**
     * Setter for profileIdentityIncludeExecutiveAssistant
     *
     * @param bool $profileIdentityIncludeExecutiveAssistant
     * @return $this
     */
    public function setProfileIdentityIncludeExecutiveAssistant($profileIdentityIncludeExecutiveAssistant)
    {
        $this->profileIdentityIncludeExecutiveAssistant = $profileIdentityIncludeExecutiveAssistant;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityIncludeExecutiveAssistant()
    {
        $this->profileIdentityIncludeExecutiveAssistant = null;
        return $this;
    }

    /**
     * Getter for profileIdentityMobileNumberAlerted
     *
     * @return string[]
     */
    public function getProfileIdentityMobileNumberAlerted()
    {
        return $this->profileIdentityMobileNumberAlerted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityMobileNumberAlerted;
    }

    /**
     * Setter for profileIdentityMobileNumberAlerted
     *
     * @param string[] $profileIdentityMobileNumberAlerted
     * @return $this
     */
    public function setProfileIdentityMobileNumberAlerted(array $profileIdentityMobileNumberAlerted)
    {
        $this->profileIdentityMobileNumberAlerted = $profileIdentityMobileNumberAlerted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityMobileNumberAlerted()
    {
        $this->profileIdentityMobileNumberAlerted = null;
        return $this;
    }

    /**
     * Adder for profileIdentityMobileNumberAlerted
     *
     * @param string $profileIdentityMobileNumberAlerted
     * @return $this
     */
    public function addProfileIdentityMobileNumberAlerted(string $profileIdentityMobileNumberAlerted)
    {
        $this->profileIdentityMobileNumberAlerted[] = $profileIdentityMobileNumberAlerted;
        return $this;
    }


}

