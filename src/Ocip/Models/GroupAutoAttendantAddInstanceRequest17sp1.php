<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantAddInstanceRequest17sp1
 *
 * Add a Auto Attendant instance to a group.
 *         The domain is required in the serviceUserId.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantAddInstanceRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu16|null
     */
    private $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu16|null
     */
    private $afterHoursMenu = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

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
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu16|null
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @ElementName businessHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu16|null $businessHoursMenu
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu16|null
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @ElementName afterHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantAddMenu16|null $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu($afterHoursMenu)
    {
        $this->afterHoursMenu = $afterHoursMenu;
        return $this;
    }


}

