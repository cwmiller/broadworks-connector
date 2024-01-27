<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAdmissionControlGetResponse25
 *
 * Response to the SystemSessionAdmissionControlGetRequest22V3.
 *         The response contains the session admission control settings for the system.
 *
 * @see SystemSessionAdmissionControlGetRequest22V3
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16469","type":"sequence"}]
 */
class SystemSessionAdmissionControlGetResponse25 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName countLongConnectionsToMediaServer
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $countLongConnectionsToMediaServer = null;

    /**
     * @ElementName sacHandlingForMoH
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType|null
     */
    protected $sacHandlingForMoH = null;

    /**
     * @ElementName blockVMDepositDueToSACLimits
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $blockVMDepositDueToSACLimits = null;

    /**
     * @ElementName sacCodecSelectionPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType|null
     */
    protected $sacCodecSelectionPolicy = null;

    /**
     * @ElementName countCallToMobileNumberForSACSubscriber
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $countCallToMobileNumberForSACSubscriber = null;

    /**
     * @ElementName countBWAnywhereForSACSubscriber
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $countBWAnywhereForSACSubscriber = null;

    /**
     * @ElementName countROForSACSubscriber
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $countROForSACSubscriber = null;

    /**
     * @ElementName excludeBWMobilityForSACSubscriber
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $excludeBWMobilityForSACSubscriber = null;

    /**
     * @ElementName enableHoldoverOfHighwaterSessionCounts
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $enableHoldoverOfHighwaterSessionCounts = null;

    /**
     * @ElementName holdoverPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlHighwaterSessionCountHoldoverPeriodMinutes
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlHighwaterSessionCountHoldoverPeriodMinutes|null
     */
    protected $holdoverPeriodMinutes = null;

    /**
     * @ElementName timeZoneOffsetMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlTimeZoneOffsetMinutes
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlTimeZoneOffsetMinutes|null
     */
    protected $timeZoneOffsetMinutes = null;

    /**
     * @ElementName countCallsRedirectedToExternalDestination
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $countCallsRedirectedToExternalDestination = null;

    /**
     * @ElementName releaseBWAnywhereDevicesOnly
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16469
     * @var bool|null
     */
    protected $releaseBWAnywhereDevicesOnly = null;

    /**
     * Getter for countLongConnectionsToMediaServer
     *
     * @return bool
     */
    public function getCountLongConnectionsToMediaServer()
    {
        return $this->countLongConnectionsToMediaServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countLongConnectionsToMediaServer;
    }

    /**
     * Setter for countLongConnectionsToMediaServer
     *
     * @param bool $countLongConnectionsToMediaServer
     * @return $this
     */
    public function setCountLongConnectionsToMediaServer($countLongConnectionsToMediaServer)
    {
        $this->countLongConnectionsToMediaServer = $countLongConnectionsToMediaServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountLongConnectionsToMediaServer()
    {
        $this->countLongConnectionsToMediaServer = null;
        return $this;
    }

    /**
     * Getter for sacHandlingForMoH
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType
     */
    public function getSacHandlingForMoH()
    {
        return $this->sacHandlingForMoH instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sacHandlingForMoH;
    }

    /**
     * Setter for sacHandlingForMoH
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType $sacHandlingForMoH
     * @return $this
     */
    public function setSacHandlingForMoH(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlForMusicOnHoldType $sacHandlingForMoH)
    {
        $this->sacHandlingForMoH = $sacHandlingForMoH;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSacHandlingForMoH()
    {
        $this->sacHandlingForMoH = null;
        return $this;
    }

    /**
     * Getter for blockVMDepositDueToSACLimits
     *
     * @return bool
     */
    public function getBlockVMDepositDueToSACLimits()
    {
        return $this->blockVMDepositDueToSACLimits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockVMDepositDueToSACLimits;
    }

    /**
     * Setter for blockVMDepositDueToSACLimits
     *
     * @param bool $blockVMDepositDueToSACLimits
     * @return $this
     */
    public function setBlockVMDepositDueToSACLimits($blockVMDepositDueToSACLimits)
    {
        $this->blockVMDepositDueToSACLimits = $blockVMDepositDueToSACLimits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockVMDepositDueToSACLimits()
    {
        $this->blockVMDepositDueToSACLimits = null;
        return $this;
    }

    /**
     * Getter for sacCodecSelectionPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType
     */
    public function getSacCodecSelectionPolicy()
    {
        return $this->sacCodecSelectionPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sacCodecSelectionPolicy;
    }

    /**
     * Setter for sacCodecSelectionPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType $sacCodecSelectionPolicy
     * @return $this
     */
    public function setSacCodecSelectionPolicy(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlCodecSelectionPolicyType $sacCodecSelectionPolicy)
    {
        $this->sacCodecSelectionPolicy = $sacCodecSelectionPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSacCodecSelectionPolicy()
    {
        $this->sacCodecSelectionPolicy = null;
        return $this;
    }

    /**
     * Getter for countCallToMobileNumberForSACSubscriber
     *
     * @return bool
     */
    public function getCountCallToMobileNumberForSACSubscriber()
    {
        return $this->countCallToMobileNumberForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countCallToMobileNumberForSACSubscriber;
    }

    /**
     * Setter for countCallToMobileNumberForSACSubscriber
     *
     * @param bool $countCallToMobileNumberForSACSubscriber
     * @return $this
     */
    public function setCountCallToMobileNumberForSACSubscriber($countCallToMobileNumberForSACSubscriber)
    {
        $this->countCallToMobileNumberForSACSubscriber = $countCallToMobileNumberForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountCallToMobileNumberForSACSubscriber()
    {
        $this->countCallToMobileNumberForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for countBWAnywhereForSACSubscriber
     *
     * @return bool
     */
    public function getCountBWAnywhereForSACSubscriber()
    {
        return $this->countBWAnywhereForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countBWAnywhereForSACSubscriber;
    }

    /**
     * Setter for countBWAnywhereForSACSubscriber
     *
     * @param bool $countBWAnywhereForSACSubscriber
     * @return $this
     */
    public function setCountBWAnywhereForSACSubscriber($countBWAnywhereForSACSubscriber)
    {
        $this->countBWAnywhereForSACSubscriber = $countBWAnywhereForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountBWAnywhereForSACSubscriber()
    {
        $this->countBWAnywhereForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for countROForSACSubscriber
     *
     * @return bool
     */
    public function getCountROForSACSubscriber()
    {
        return $this->countROForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countROForSACSubscriber;
    }

    /**
     * Setter for countROForSACSubscriber
     *
     * @param bool $countROForSACSubscriber
     * @return $this
     */
    public function setCountROForSACSubscriber($countROForSACSubscriber)
    {
        $this->countROForSACSubscriber = $countROForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountROForSACSubscriber()
    {
        $this->countROForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for excludeBWMobilityForSACSubscriber
     *
     * @return bool
     */
    public function getExcludeBWMobilityForSACSubscriber()
    {
        return $this->excludeBWMobilityForSACSubscriber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeBWMobilityForSACSubscriber;
    }

    /**
     * Setter for excludeBWMobilityForSACSubscriber
     *
     * @param bool $excludeBWMobilityForSACSubscriber
     * @return $this
     */
    public function setExcludeBWMobilityForSACSubscriber($excludeBWMobilityForSACSubscriber)
    {
        $this->excludeBWMobilityForSACSubscriber = $excludeBWMobilityForSACSubscriber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeBWMobilityForSACSubscriber()
    {
        $this->excludeBWMobilityForSACSubscriber = null;
        return $this;
    }

    /**
     * Getter for enableHoldoverOfHighwaterSessionCounts
     *
     * @return bool
     */
    public function getEnableHoldoverOfHighwaterSessionCounts()
    {
        return $this->enableHoldoverOfHighwaterSessionCounts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableHoldoverOfHighwaterSessionCounts;
    }

    /**
     * Setter for enableHoldoverOfHighwaterSessionCounts
     *
     * @param bool $enableHoldoverOfHighwaterSessionCounts
     * @return $this
     */
    public function setEnableHoldoverOfHighwaterSessionCounts($enableHoldoverOfHighwaterSessionCounts)
    {
        $this->enableHoldoverOfHighwaterSessionCounts = $enableHoldoverOfHighwaterSessionCounts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableHoldoverOfHighwaterSessionCounts()
    {
        $this->enableHoldoverOfHighwaterSessionCounts = null;
        return $this;
    }

    /**
     * Getter for holdoverPeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlHighwaterSessionCountHoldoverPeriodMinutes
     */
    public function getHoldoverPeriodMinutes()
    {
        return $this->holdoverPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdoverPeriodMinutes;
    }

    /**
     * Setter for holdoverPeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlHighwaterSessionCountHoldoverPeriodMinutes $holdoverPeriodMinutes
     * @return $this
     */
    public function setHoldoverPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlHighwaterSessionCountHoldoverPeriodMinutes $holdoverPeriodMinutes)
    {
        $this->holdoverPeriodMinutes = $holdoverPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldoverPeriodMinutes()
    {
        $this->holdoverPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for timeZoneOffsetMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlTimeZoneOffsetMinutes
     */
    public function getTimeZoneOffsetMinutes()
    {
        return $this->timeZoneOffsetMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneOffsetMinutes;
    }

    /**
     * Setter for timeZoneOffsetMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlTimeZoneOffsetMinutes $timeZoneOffsetMinutes
     * @return $this
     */
    public function setTimeZoneOffsetMinutes(\CWM\BroadWorksConnector\Ocip\Models\SessionAdmissionControlTimeZoneOffsetMinutes $timeZoneOffsetMinutes)
    {
        $this->timeZoneOffsetMinutes = $timeZoneOffsetMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneOffsetMinutes()
    {
        $this->timeZoneOffsetMinutes = null;
        return $this;
    }

    /**
     * Getter for countCallsRedirectedToExternalDestination
     *
     * @return bool
     */
    public function getCountCallsRedirectedToExternalDestination()
    {
        return $this->countCallsRedirectedToExternalDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countCallsRedirectedToExternalDestination;
    }

    /**
     * Setter for countCallsRedirectedToExternalDestination
     *
     * @param bool $countCallsRedirectedToExternalDestination
     * @return $this
     */
    public function setCountCallsRedirectedToExternalDestination($countCallsRedirectedToExternalDestination)
    {
        $this->countCallsRedirectedToExternalDestination = $countCallsRedirectedToExternalDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountCallsRedirectedToExternalDestination()
    {
        $this->countCallsRedirectedToExternalDestination = null;
        return $this;
    }

    /**
     * Getter for releaseBWAnywhereDevicesOnly
     *
     * @return bool
     */
    public function getReleaseBWAnywhereDevicesOnly()
    {
        return $this->releaseBWAnywhereDevicesOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->releaseBWAnywhereDevicesOnly;
    }

    /**
     * Setter for releaseBWAnywhereDevicesOnly
     *
     * @param bool $releaseBWAnywhereDevicesOnly
     * @return $this
     */
    public function setReleaseBWAnywhereDevicesOnly($releaseBWAnywhereDevicesOnly)
    {
        $this->releaseBWAnywhereDevicesOnly = $releaseBWAnywhereDevicesOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReleaseBWAnywhereDevicesOnly()
    {
        $this->releaseBWAnywhereDevicesOnly = null;
        return $this;
    }
}

