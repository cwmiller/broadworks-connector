<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityModifyRequest21
 *
 * Modify the user's BroadWorks Mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *                   
 *         The isActive, useMobileIdentityCallAnchoring, and preventCallsToOwnMobiles parameters can be modified by users with Group Authorization Level and above.
 *         The mobileIdentity, profileIdentityDevicesToRing, rofileIdentityIncludeSharedCallAppearance, profileIdentityIncludeBroadworksAnywhere mobileIdentity and profileIdentityMobilityNumbersAlerted parameters can be modified by users with User Authorization Level and above when the BroadWorks Mobility service is turned on.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1880","type":"sequence"}]
 */
class UserBroadWorksMobilityModifyRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName useMobileIdentityCallAnchoring
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var bool|null
     */
    private $useMobileIdentityCallAnchoring = null;

    /**
     * @ElementName preventCallsToOwnMobiles
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var bool|null
     */
    private $preventCallsToOwnMobiles = null;

    /**
     * @ElementName mobileIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityModifyEntry
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityModifyEntry[]
     */
    private $mobileIdentity = array(
        
    );

    /**
     * @ElementName profileIdentityDevicesToRing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    private $profileIdentityDevicesToRing = null;

    /**
     * @ElementName profileIdentityIncludeSharedCallAppearance
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var bool|null
     */
    private $profileIdentityIncludeSharedCallAppearance = null;

    /**
     * @ElementName profileIdentityIncludeBroadworksAnywhere
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var bool|null
     */
    private $profileIdentityIncludeBroadworksAnywhere = null;

    /**
     * @ElementName profileIdentityIncludeExecutiveAssistant
     * @Type bool
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var bool|null
     */
    private $profileIdentityIncludeExecutiveAssistant = null;

    /**
     * @ElementName profileIdentityMobilityNumbersAlerted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList
     * @Nillable
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1880
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $profileIdentityMobilityNumbersAlerted = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityModifyEntry[]
     */
    public function getMobileIdentity()
    {
        return $this->mobileIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileIdentity;
    }

    /**
     * Setter for mobileIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityModifyEntry[] $mobileIdentity
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityUserMobileIdentityModifyEntry $mobileIdentity
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
     * Getter for profileIdentityMobilityNumbersAlerted
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList|null
     */
    public function getProfileIdentityMobilityNumbersAlerted()
    {
        return $this->profileIdentityMobilityNumbersAlerted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityMobilityNumbersAlerted;
    }

    /**
     * Setter for profileIdentityMobilityNumbersAlerted
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList|null $profileIdentityMobilityNumbersAlerted
     * @return $this
     */
    public function setProfileIdentityMobilityNumbersAlerted(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityAlertingMobileNumberReplacementList $profileIdentityMobilityNumbersAlerted = null)
    {
        if ($profileIdentityMobilityNumbersAlerted === null) {
            $this->profileIdentityMobilityNumbersAlerted = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->profileIdentityMobilityNumbersAlerted = $profileIdentityMobilityNumbersAlerted;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityMobilityNumbersAlerted()
    {
        $this->profileIdentityMobilityNumbersAlerted = null;
        return $this;
    }


}

