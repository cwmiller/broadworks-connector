<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceResponse20
 *
 * Response to GroupAutoAttendantGetInstanceRequest20.
 *         Contains the service profile information.
 *
 *         
 *         The following elements are only used in AS data mode:
 *           type, use AutoAttendantType.BASIC in HSS mode.
 *           holidayMenu.
 *         The following elements are only valid for Standard Auto
 *         Attendants:
 *           holidayMenu
 */
class GroupAutoAttendantGetInstanceResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName type
     * @var string|null
     */
    private $type = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    private $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    private $afterHoursMenu = null;

    /**
     * @ElementName holidayMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    private $holidayMenu = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for type
     *
     * @ElementName type
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param string|null $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @ElementName businessHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null $businessHoursMenu
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @ElementName afterHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null $afterHoursMenu
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null
     */
    public function getHolidayMenu()
    {
        return $this->holidayMenu;
    }

    /**
     * Setter for holidayMenu
     *
     * @ElementName holidayMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu20|null $holidayMenu
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


}

