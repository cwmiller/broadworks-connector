<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceResponse24
 *
 * Response to GroupAutoAttendantGetInstanceRequest24.
 *         Contains the service profile information.
 *
 *         The following elements are only used in AS data mode and not returned in XS
 *         datamode:
 *         transferToOperatorAudioFile,
 *         transferToOperatorVideoFile,
 *         type (use AutoAttendantType.BASIC in XS mode),
 *         holidayMenu.
 *
 *         The following element is only used in AS data mode:
 *         transferToOperatorAnnouncementSelection, value "Default" is returned in XS data
 *         mode.
 *                  
 *         The following elements are only valid for Standard Auto
 *         Attendants:
 *           holidayMenu
 *
 * @see GroupAutoAttendantGetInstanceRequest24
 * @Groups [{"id":"ec63a55bc41262b2dd33a1f4e8e84674:370","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType|null
     */
    protected $type = null;

    /**
     * @ElementName firstDigitTimeoutSeconds
     * @Type int
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @MinInclusive 1
     * @MaxInclusive 60
     * @var int|null
     */
    protected $firstDigitTimeoutSeconds = null;

    /**
     * @ElementName transferToOperatorAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    protected $transferToOperatorAnnouncementSelection = null;

    /**
     * @ElementName transferToOperatorAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $transferToOperatorAudioFile = null;

    /**
     * @ElementName transferToOperatorVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $transferToOperatorVideoFile = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName businessHours
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName extensionDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    protected $extensionDialingScope = null;

    /**
     * @ElementName nameDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    protected $nameDialingScope = null;

    /**
     * @ElementName nameDialingEntries
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null
     */
    protected $nameDialingEntries = null;

    /**
     * @ElementName businessHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    protected $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    protected $afterHoursMenu = null;

    /**
     * @ElementName holidayMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    protected $holidayMenu = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group ec63a55bc41262b2dd33a1f4e8e84674:370
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
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
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getTransferToOperatorAudioFile()
    {
        return $this->transferToOperatorAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToOperatorAudioFile;
    }

    /**
     * Setter for transferToOperatorAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $transferToOperatorAudioFile
     * @return $this
     */
    public function setTransferToOperatorAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $transferToOperatorAudioFile)
    {
        $this->transferToOperatorAudioFile = $transferToOperatorAudioFile;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getTransferToOperatorVideoFile()
    {
        return $this->transferToOperatorVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferToOperatorVideoFile;
    }

    /**
     * Setter for transferToOperatorVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $transferToOperatorVideoFile
     * @return $this
     */
    public function setTransferToOperatorVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $transferToOperatorVideoFile)
    {
        $this->transferToOperatorVideoFile = $transferToOperatorVideoFile;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours
     * @return $this
     */
    public function setBusinessHours(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours)
    {
        $this->businessHours = $businessHours;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20 $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20 $businessHoursMenu)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20 $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20 $afterHoursMenu)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20
     */
    public function getHolidayMenu()
    {
        return $this->holidayMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayMenu;
    }

    /**
     * Setter for holidayMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20 $holidayMenu
     * @return $this
     */
    public function setHolidayMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20 $holidayMenu)
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

