<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantConsolidatedModifyInstanceRequest
 *
 * Request to modify an Auto Attendant instance and assign services to the Auto
 * Attendant.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 *         When phone numbers are un-assigned from the user, the unused numbers may
 * be un-assigned from the group and service provider. If UnassignPhoneNumbersLevel
 * is set to 'Group', the user's primary phone number, fax number and any alternate
 * numbers, will be un-assigned from the group if the command is executed by a
 * service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group
 * and service provider if the command is executed by a provisioning administrator
 * or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned
 * because of insufficient privilege.
 *         
 *         If the phoneNumber has not been assigned to the group and
 * addPhoneNumberToGroup is set to true, it will be added to group if needed if the
 * command is executed by a service provider administrator and above. The command
 * will fail otherwise.
 *         
 *         The following elements are only used in AS data mode:
 *           holidayMenu.
 *         The following elements are only valid for Standard Auto
 *         Attendants:
 *           holidayMenu
 */
class GroupAutoAttendantConsolidatedModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @var string|null
     */
    private $unassignPhoneNumbers = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName firstDigitTimeoutSeconds
     * @var int|null
     */
    private $firstDigitTimeoutSeconds = null;

    /**
     * @ElementName enableVideo
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName businessHours
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName extensionDialingScope
     * @var string|null
     */
    private $extensionDialingScope = null;

    /**
     * @ElementName nameDialingScope
     * @var string|null
     */
    private $nameDialingScope = null;

    /**
     * @ElementName nameDialingEntries
     * @var string|null
     */
    private $nameDialingEntries = null;

    /**
     * @ElementName businessHoursMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    private $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    private $afterHoursMenu = null;

    /**
     * @ElementName holidayMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    private $holidayMenu = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName serviceList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null
     */
    private $serviceList = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @return string|null
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @param string|null $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers($unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * Getter for addPhoneNumberToGroup
     *
     * @ElementName addPhoneNumberToGroup
     * @return bool|null
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @ElementName addPhoneNumberToGroup
     * @param bool|null $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for firstDigitTimeoutSeconds
     *
     * @ElementName firstDigitTimeoutSeconds
     * @return int|null
     */
    public function getFirstDigitTimeoutSeconds()
    {
        return $this->firstDigitTimeoutSeconds;
    }

    /**
     * Setter for firstDigitTimeoutSeconds
     *
     * @ElementName firstDigitTimeoutSeconds
     * @param int|null $firstDigitTimeoutSeconds
     * @return $this
     */
    public function setFirstDigitTimeoutSeconds($firstDigitTimeoutSeconds)
    {
        $this->firstDigitTimeoutSeconds = $firstDigitTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for enableVideo
     *
     * @ElementName enableVideo
     * @return bool|null
     */
    public function getEnableVideo()
    {
        return $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @ElementName enableVideo
     * @param bool|null $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * Getter for businessHours
     *
     * @ElementName businessHours
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @ElementName businessHours
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $businessHours
     * @return $this
     */
    public function setBusinessHours($businessHours)
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for extensionDialingScope
     *
     * @ElementName extensionDialingScope
     * @return string|null
     */
    public function getExtensionDialingScope()
    {
        return $this->extensionDialingScope;
    }

    /**
     * Setter for extensionDialingScope
     *
     * @ElementName extensionDialingScope
     * @param string|null $extensionDialingScope
     * @return $this
     */
    public function setExtensionDialingScope($extensionDialingScope)
    {
        $this->extensionDialingScope = $extensionDialingScope;
        return $this;
    }

    /**
     * Getter for nameDialingScope
     *
     * @ElementName nameDialingScope
     * @return string|null
     */
    public function getNameDialingScope()
    {
        return $this->nameDialingScope;
    }

    /**
     * Setter for nameDialingScope
     *
     * @ElementName nameDialingScope
     * @param string|null $nameDialingScope
     * @return $this
     */
    public function setNameDialingScope($nameDialingScope)
    {
        $this->nameDialingScope = $nameDialingScope;
        return $this;
    }

    /**
     * Getter for nameDialingEntries
     *
     * @ElementName nameDialingEntries
     * @return string|null
     */
    public function getNameDialingEntries()
    {
        return $this->nameDialingEntries;
    }

    /**
     * Setter for nameDialingEntries
     *
     * @ElementName nameDialingEntries
     * @param string|null $nameDialingEntries
     * @return $this
     */
    public function setNameDialingEntries($nameDialingEntries)
    {
        $this->nameDialingEntries = $nameDialingEntries;
        return $this;
    }

    /**
     * Getter for businessHoursMenu
     *
     * @ElementName businessHoursMenu
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @ElementName businessHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu($businessHoursMenu)
    {
        $this->businessHoursMenu = $businessHoursMenu;
        return $this;
    }

    /**
     * Getter for afterHoursMenu
     *
     * @ElementName afterHoursMenu
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @ElementName afterHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu($afterHoursMenu)
    {
        $this->afterHoursMenu = $afterHoursMenu;
        return $this;
    }

    /**
     * Getter for holidayMenu
     *
     * @ElementName holidayMenu
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null
     */
    public function getHolidayMenu()
    {
        return $this->holidayMenu;
    }

    /**
     * Setter for holidayMenu
     *
     * @ElementName holidayMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu20|null $holidayMenu
     * @return $this
     */
    public function setHolidayMenu($holidayMenu)
    {
        $this->holidayMenu = $holidayMenu;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for serviceList
     *
     * @ElementName serviceList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null
     */
    public function getServiceList()
    {
        return $this->serviceList;
    }

    /**
     * Setter for serviceList
     *
     * @ElementName serviceList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null $serviceList
     * @return $this
     */
    public function setServiceList($serviceList)
    {
        $this->serviceList = $serviceList;
        return $this;
    }

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


}
