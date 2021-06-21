<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantAddInstanceRequest19
 *
 * Add a Auto Attendant instance to a group.
 *         The domain is required in the serviceUserId.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           type, use value "Basic" in XS data mode
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           holidayMenu
 *         The following elements are only valid for Standard Auto Attendants:
 *           holidayMenu
 *           
 *         Replaced by: GroupAutoAttendantAddInstanceRequest20 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupAutoAttendantAddInstanceRequest20
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1178","type":"sequence"}]
 */
class GroupAutoAttendantAddInstanceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantType|null
     */
    private $type = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName businessHours
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName extensionDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    private $extensionDialingScope = null;

    /**
     * @ElementName nameDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    private $nameDialingScope = null;

    /**
     * @ElementName nameDialingEntries
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null
     */
    private $nameDialingEntries = null;

    /**
     * @ElementName businessHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19|null
     */
    private $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19|null
     */
    private $afterHoursMenu = null;

    /**
     * @ElementName holidayMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19|null
     */
    private $holidayMenu = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:1178
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19 $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19 $businessHoursMenu)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19 $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19 $afterHoursMenu)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19
     */
    public function getHolidayMenu()
    {
        return $this->holidayMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayMenu;
    }

    /**
     * Setter for holidayMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19 $holidayMenu
     * @return $this
     */
    public function setHolidayMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu19 $holidayMenu)
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

