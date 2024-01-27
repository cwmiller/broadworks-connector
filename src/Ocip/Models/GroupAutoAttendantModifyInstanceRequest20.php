<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantModifyInstanceRequest20
 *
 * Request to modify an Auto Attendant instance.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 *         The following elements are only used in AS data mode and not returned in XS
 *         datamode:
 *          transferToOperatorAudioFile,
 *          transferToOperatorVideoFile,
 *          holidayMenu
 *
 *        The following element is only used in AS data mode:
 *          transferToOperatorAnnouncementSelection, value "Default" is returned in XS data
 * 	   mode.
 *
 *         The following elements are only valid for Standard Auto
 *         Attendants:
 *           holidayMenu
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec63a55bc41262b2dd33a1f4e8e84674:432","type":"sequence"}]
 */
class GroupAutoAttendantModifyInstanceRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName firstDigitTimeoutSeconds
     * @Type int
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $firstDigitTimeoutSeconds = null;

    /**
     * @ElementName transferToOperatorAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    protected $transferToOperatorAnnouncementSelection = null;

    /**
     * @ElementName transferToOperatorAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferToOperatorAudioFile = null;

    /**
     * @ElementName transferToOperatorVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferToOperatorVideoFile = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName businessHours
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Nillable
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Nillable
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName extensionDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    protected $extensionDialingScope = null;

    /**
     * @ElementName nameDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    protected $nameDialingScope = null;

    /**
     * @ElementName nameDialingEntries
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null
     */
    protected $nameDialingEntries = null;

    /**
     * @ElementName businessHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    protected $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    protected $afterHoursMenu = null;

    /**
     * @ElementName holidayMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    protected $holidayMenu = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:432
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for firstDigitTimeoutSeconds
     *
     * @return int
     */
    public function getFirstDigitTimeoutSeconds()
    {
        return $this->firstDigitTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstDigitTimeoutSeconds;
    }

    /**
     * Setter for firstDigitTimeoutSeconds
     *
     * @param int $firstDigitTimeoutSeconds
     * @return $this
     */
    public function setFirstDigitTimeoutSeconds($firstDigitTimeoutSeconds)
    {
        $this->firstDigitTimeoutSeconds = $firstDigitTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstDigitTimeoutSeconds()
    {
        $this->firstDigitTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for transferToOperatorAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getTransferToOperatorAnnouncementSelection()
    {
        return $this->transferToOperatorAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToOperatorAnnouncementSelection;
    }

    /**
     * Setter for transferToOperatorAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $transferToOperatorAnnouncementSelection
     * @return $this
     */
    public function setTransferToOperatorAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $transferToOperatorAnnouncementSelection)
    {
        $this->transferToOperatorAnnouncementSelection = $transferToOperatorAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferToOperatorAnnouncementSelection()
    {
        $this->transferToOperatorAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for transferToOperatorAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getTransferToOperatorAudioFile()
    {
        return $this->transferToOperatorAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToOperatorAudioFile;
    }

    /**
     * Setter for transferToOperatorAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $transferToOperatorAudioFile
     * @return $this
     */
    public function setTransferToOperatorAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $transferToOperatorAudioFile = null)
    {
        if ($transferToOperatorAudioFile === null) {
            $this->transferToOperatorAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferToOperatorAudioFile = $transferToOperatorAudioFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferToOperatorAudioFile()
    {
        $this->transferToOperatorAudioFile = null;
        return $this;
    }

    /**
     * Getter for transferToOperatorVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getTransferToOperatorVideoFile()
    {
        return $this->transferToOperatorVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToOperatorVideoFile;
    }

    /**
     * Setter for transferToOperatorVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $transferToOperatorVideoFile
     * @return $this
     */
    public function setTransferToOperatorVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $transferToOperatorVideoFile = null)
    {
        if ($transferToOperatorVideoFile === null) {
            $this->transferToOperatorVideoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferToOperatorVideoFile = $transferToOperatorVideoFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferToOperatorVideoFile()
    {
        $this->transferToOperatorVideoFile = null;
        return $this;
    }

    /**
     * Getter for enableVideo
     *
     * @return bool
     */
    public function getEnableVideo()
    {
        return $this->enableVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @param bool $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableVideo()
    {
        $this->enableVideo = null;
        return $this;
    }

    /**
     * Getter for businessHours
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $businessHours
     * @return $this
     */
    public function setBusinessHours(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours = null)
    {
        if ($businessHours === null) {
            $this->businessHours = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->businessHours = $businessHours;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusinessHours()
    {
        $this->businessHours = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule = null)
    {
        if ($holidaySchedule === null) {
            $this->holidaySchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holidaySchedule = $holidaySchedule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for extensionDialingScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     */
    public function getExtensionDialingScope()
    {
        return $this->extensionDialingScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionDialingScope;
    }

    /**
     * Setter for extensionDialingScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope $extensionDialingScope
     * @return $this
     */
    public function setExtensionDialingScope(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope $extensionDialingScope)
    {
        $this->extensionDialingScope = $extensionDialingScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionDialingScope()
    {
        $this->extensionDialingScope = null;
        return $this;
    }

    /**
     * Getter for nameDialingScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     */
    public function getNameDialingScope()
    {
        return $this->nameDialingScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameDialingScope;
    }

    /**
     * Setter for nameDialingScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope $nameDialingScope
     * @return $this
     */
    public function setNameDialingScope(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope $nameDialingScope)
    {
        $this->nameDialingScope = $nameDialingScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNameDialingScope()
    {
        $this->nameDialingScope = null;
        return $this;
    }

    /**
     * Getter for nameDialingEntries
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry
     */
    public function getNameDialingEntries()
    {
        return $this->nameDialingEntries instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameDialingEntries;
    }

    /**
     * Setter for nameDialingEntries
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry $nameDialingEntries
     * @return $this
     */
    public function setNameDialingEntries(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry $nameDialingEntries)
    {
        $this->nameDialingEntries = $nameDialingEntries;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNameDialingEntries()
    {
        $this->nameDialingEntries = null;
        return $this;
    }

    /**
     * Getter for businessHoursMenu
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20 $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20 $businessHoursMenu)
    {
        $this->businessHoursMenu = $businessHoursMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusinessHoursMenu()
    {
        $this->businessHoursMenu = null;
        return $this;
    }

    /**
     * Getter for afterHoursMenu
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20 $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20 $afterHoursMenu)
    {
        $this->afterHoursMenu = $afterHoursMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAfterHoursMenu()
    {
        $this->afterHoursMenu = null;
        return $this;
    }

    /**
     * Getter for holidayMenu
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20
     */
    public function getHolidayMenu()
    {
        return $this->holidayMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayMenu;
    }

    /**
     * Setter for holidayMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20 $holidayMenu
     * @return $this
     */
    public function setHolidayMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20 $holidayMenu)
    {
        $this->holidayMenu = $holidayMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayMenu()
    {
        $this->holidayMenu = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }
}

