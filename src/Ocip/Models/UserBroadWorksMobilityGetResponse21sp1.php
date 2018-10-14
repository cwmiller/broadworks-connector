<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetResponse21sp1
 *
 * Response to a UserBroadWorksMobilityGetRequest21sp1.
 *          Columns for the profileIdentityMobileNumberAlerted table are as
 * follows: "Mobile Number", "Country Code", "National Prefix".
 *          Columns for the mobileIdentity table are as follows: "Mobile Number",
 * "Description", "Country Code", "National Prefix", "Is Primary", "Enable
 * Alerting".
 *
 * @see UserBroadWorksMobilityGetRequest21sp1
 */
class UserBroadWorksMobilityGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName profileIdentityMobileNumberAlertedTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileIdentityMobileNumberAlertedTable = null;

    /**
     * @ElementName mobileIdentityTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileIdentityTable = null;

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
     * Getter for profileIdentityMobileNumberAlertedTable
     *
     * @ElementName profileIdentityMobileNumberAlertedTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getProfileIdentityMobileNumberAlertedTable()
    {
        return $this->profileIdentityMobileNumberAlertedTable;
    }

    /**
     * Setter for profileIdentityMobileNumberAlertedTable
     *
     * @ElementName profileIdentityMobileNumberAlertedTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $profileIdentityMobileNumberAlertedTable
     * @return $this
     */
    public function setProfileIdentityMobileNumberAlertedTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileIdentityMobileNumberAlertedTable)
    {
        $this->profileIdentityMobileNumberAlertedTable = $profileIdentityMobileNumberAlertedTable;
        return $this;
    }

    /**
     * Getter for mobileIdentityTable
     *
     * @ElementName mobileIdentityTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMobileIdentityTable()
    {
        return $this->mobileIdentityTable;
    }

    /**
     * Setter for mobileIdentityTable
     *
     * @ElementName mobileIdentityTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mobileIdentityTable
     * @return $this
     */
    public function setMobileIdentityTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileIdentityTable)
    {
        $this->mobileIdentityTable = $mobileIdentityTable;
        return $this;
    }


}

