<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetResponse21
 *
 * Response to a UserBroadWorksMobilityGetRequest21.
 *
 * @see UserBroadWorksMobilityGetRequest21
 */
class UserBroadWorksMobilityGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName useMobileIdentityCallAnchoring
     * @var bool|null
     */
    private $useMobileIdentityCallAnchoring = null;

    /**
     * @ElementName preventCallsToOwnMobiles
     * @var bool|null
     */
    private $preventCallsToOwnMobiles = null;

    /**
     * @ElementName mobileIdentity
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry[]
     */
    private $mobileIdentity = array(
        
    );

    /**
     * @ElementName profileIdentityDevicesToRing
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    private $profileIdentityDevicesToRing = null;

    /**
     * @ElementName profileIdentityIncludeSharedCallAppearance
     * @var bool|null
     */
    private $profileIdentityIncludeSharedCallAppearance = null;

    /**
     * @ElementName profileIdentityIncludeBroadworksAnywhere
     * @var bool|null
     */
    private $profileIdentityIncludeBroadworksAnywhere = null;

    /**
     * @ElementName profileIdentityIncludeExecutiveAssistant
     * @var bool|null
     */
    private $profileIdentityIncludeExecutiveAssistant = null;

    /**
     * @ElementName profileIdentityMobileNumberAlerted
     * @var string[]
     */
    private $profileIdentityMobileNumberAlerted = array(
        
    );

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for useMobileIdentityCallAnchoring
     *
     * @ElementName useMobileIdentityCallAnchoring
     * @return bool|null
     */
    public function getUseMobileIdentityCallAnchoring()
    {
        return $this->useMobileIdentityCallAnchoring;
    }

    /**
     * Setter for useMobileIdentityCallAnchoring
     *
     * @ElementName useMobileIdentityCallAnchoring
     * @param bool|null $useMobileIdentityCallAnchoring
     * @return $this
     */
    public function setUseMobileIdentityCallAnchoring($useMobileIdentityCallAnchoring)
    {
        $this->useMobileIdentityCallAnchoring = $useMobileIdentityCallAnchoring;
        return $this;
    }

    /**
     * Getter for preventCallsToOwnMobiles
     *
     * @ElementName preventCallsToOwnMobiles
     * @return bool|null
     */
    public function getPreventCallsToOwnMobiles()
    {
        return $this->preventCallsToOwnMobiles;
    }

    /**
     * Setter for preventCallsToOwnMobiles
     *
     * @ElementName preventCallsToOwnMobiles
     * @param bool|null $preventCallsToOwnMobiles
     * @return $this
     */
    public function setPreventCallsToOwnMobiles($preventCallsToOwnMobiles)
    {
        $this->preventCallsToOwnMobiles = $preventCallsToOwnMobiles;
        return $this;
    }

    /**
     * Getter for mobileIdentity
     *
     * @ElementName mobileIdentity
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry[]
     */
    public function getMobileIdentity()
    {
        return $this->mobileIdentity;
    }

    /**
     * Setter for mobileIdentity
     *
     * @ElementName mobileIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry[] $mobileIdentity
     * @return $this
     */
    public function setMobileIdentity(array $mobileIdentity)
    {
        $this->mobileIdentity = $mobileIdentity;
        return $this;
    }

    /**
     * Adder for mobileIdentity
     *
     * @ElementName mobileIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityEntry $mobileIdentity
     * @return $this
     */
    public function addMobileIdentity($mobileIdentity)
    {
        $this->mobileIdentity []= $mobileIdentity;
        return $this;
    }

    /**
     * Getter for profileIdentityDevicesToRing
     *
     * @ElementName profileIdentityDevicesToRing
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    public function getProfileIdentityDevicesToRing()
    {
        return $this->profileIdentityDevicesToRing;
    }

    /**
     * Setter for profileIdentityDevicesToRing
     *
     * @ElementName profileIdentityDevicesToRing
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null $profileIdentityDevicesToRing
     * @return $this
     */
    public function setProfileIdentityDevicesToRing(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing $profileIdentityDevicesToRing)
    {
        $this->profileIdentityDevicesToRing = $profileIdentityDevicesToRing;
        return $this;
    }

    /**
     * Getter for profileIdentityIncludeSharedCallAppearance
     *
     * @ElementName profileIdentityIncludeSharedCallAppearance
     * @return bool|null
     */
    public function getProfileIdentityIncludeSharedCallAppearance()
    {
        return $this->profileIdentityIncludeSharedCallAppearance;
    }

    /**
     * Setter for profileIdentityIncludeSharedCallAppearance
     *
     * @ElementName profileIdentityIncludeSharedCallAppearance
     * @param bool|null $profileIdentityIncludeSharedCallAppearance
     * @return $this
     */
    public function setProfileIdentityIncludeSharedCallAppearance($profileIdentityIncludeSharedCallAppearance)
    {
        $this->profileIdentityIncludeSharedCallAppearance = $profileIdentityIncludeSharedCallAppearance;
        return $this;
    }

    /**
     * Getter for profileIdentityIncludeBroadworksAnywhere
     *
     * @ElementName profileIdentityIncludeBroadworksAnywhere
     * @return bool|null
     */
    public function getProfileIdentityIncludeBroadworksAnywhere()
    {
        return $this->profileIdentityIncludeBroadworksAnywhere;
    }

    /**
     * Setter for profileIdentityIncludeBroadworksAnywhere
     *
     * @ElementName profileIdentityIncludeBroadworksAnywhere
     * @param bool|null $profileIdentityIncludeBroadworksAnywhere
     * @return $this
     */
    public function setProfileIdentityIncludeBroadworksAnywhere($profileIdentityIncludeBroadworksAnywhere)
    {
        $this->profileIdentityIncludeBroadworksAnywhere = $profileIdentityIncludeBroadworksAnywhere;
        return $this;
    }

    /**
     * Getter for profileIdentityIncludeExecutiveAssistant
     *
     * @ElementName profileIdentityIncludeExecutiveAssistant
     * @return bool|null
     */
    public function getProfileIdentityIncludeExecutiveAssistant()
    {
        return $this->profileIdentityIncludeExecutiveAssistant;
    }

    /**
     * Setter for profileIdentityIncludeExecutiveAssistant
     *
     * @ElementName profileIdentityIncludeExecutiveAssistant
     * @param bool|null $profileIdentityIncludeExecutiveAssistant
     * @return $this
     */
    public function setProfileIdentityIncludeExecutiveAssistant($profileIdentityIncludeExecutiveAssistant)
    {
        $this->profileIdentityIncludeExecutiveAssistant = $profileIdentityIncludeExecutiveAssistant;
        return $this;
    }

    /**
     * Getter for profileIdentityMobileNumberAlerted
     *
     * @ElementName profileIdentityMobileNumberAlerted
     * @return string[]
     */
    public function getProfileIdentityMobileNumberAlerted()
    {
        return $this->profileIdentityMobileNumberAlerted;
    }

    /**
     * Setter for profileIdentityMobileNumberAlerted
     *
     * @ElementName profileIdentityMobileNumberAlerted
     * @param string[] $profileIdentityMobileNumberAlerted
     * @return $this
     */
    public function setProfileIdentityMobileNumberAlerted(array $profileIdentityMobileNumberAlerted)
    {
        $this->profileIdentityMobileNumberAlerted = $profileIdentityMobileNumberAlerted;
        return $this;
    }

    /**
     * Adder for profileIdentityMobileNumberAlerted
     *
     * @ElementName profileIdentityMobileNumberAlerted
     * @param string $profileIdentityMobileNumberAlerted
     * @return $this
     */
    public function addProfileIdentityMobileNumberAlerted(string $profileIdentityMobileNumberAlerted)
    {
        $this->profileIdentityMobileNumberAlerted []= $profileIdentityMobileNumberAlerted;
        return $this;
    }


}

