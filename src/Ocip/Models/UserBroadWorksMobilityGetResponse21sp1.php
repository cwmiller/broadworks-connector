<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetResponse21sp1
 *
 * Response to a UserBroadWorksMobilityGetRequest21sp1.
 *          Columns for the profileIdentityMobileNumberAlerted table are as follows: "Mobile Number", "Country Code", "National Prefix".
 *          Columns for the mobileIdentity table are as follows: "Mobile Number", "Description", "Country Code", "National Prefix", "Is Primary", "Enable Alerting".
 *
 * @see UserBroadWorksMobilityGetRequest21sp1
 * @Groups [{"id":"6536ac9946b3d8422bec81ad9d995e2b:1150","type":"sequence"}]
 */
class UserBroadWorksMobilityGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName useMobileIdentityCallAnchoring
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var bool|null
     */
    private $useMobileIdentityCallAnchoring = null;

    /**
     * @ElementName preventCallsToOwnMobiles
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var bool|null
     */
    private $preventCallsToOwnMobiles = null;

    /**
     * @ElementName profileIdentityDevicesToRing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityPhoneToRing|null
     */
    private $profileIdentityDevicesToRing = null;

    /**
     * @ElementName profileIdentityIncludeSharedCallAppearance
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var bool|null
     */
    private $profileIdentityIncludeSharedCallAppearance = null;

    /**
     * @ElementName profileIdentityIncludeBroadworksAnywhere
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var bool|null
     */
    private $profileIdentityIncludeBroadworksAnywhere = null;

    /**
     * @ElementName profileIdentityIncludeExecutiveAssistant
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var bool|null
     */
    private $profileIdentityIncludeExecutiveAssistant = null;

    /**
     * @ElementName profileIdentityMobileNumberAlertedTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileIdentityMobileNumberAlertedTable = null;

    /**
     * @ElementName mobileIdentityTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:1150
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileIdentityTable = null;

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
     * Getter for profileIdentityMobileNumberAlertedTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getProfileIdentityMobileNumberAlertedTable()
    {
        return $this->profileIdentityMobileNumberAlertedTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileIdentityMobileNumberAlertedTable;
    }

    /**
     * Setter for profileIdentityMobileNumberAlertedTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileIdentityMobileNumberAlertedTable
     * @return $this
     */
    public function setProfileIdentityMobileNumberAlertedTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileIdentityMobileNumberAlertedTable)
    {
        $this->profileIdentityMobileNumberAlertedTable = $profileIdentityMobileNumberAlertedTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileIdentityMobileNumberAlertedTable()
    {
        $this->profileIdentityMobileNumberAlertedTable = null;
        return $this;
    }

    /**
     * Getter for mobileIdentityTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMobileIdentityTable()
    {
        return $this->mobileIdentityTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileIdentityTable;
    }

    /**
     * Setter for mobileIdentityTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileIdentityTable
     * @return $this
     */
    public function setMobileIdentityTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileIdentityTable)
    {
        $this->mobileIdentityTable = $mobileIdentityTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileIdentityTable()
    {
        $this->mobileIdentityTable = null;
        return $this;
    }


}

