<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceResponse16
 *
 * Response to GroupAutoAttendantGetInstanceRequest16.
 *         Contains the service profile information.
 *
 * @see GroupAutoAttendantGetInstanceRequest16
 */
class GroupAutoAttendantGetInstanceResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName enableVideo
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName businessHours
     * @var string|null
     */
    private $businessHours = null;

    /**
     * @ElementName holidayScheduleName
     * @var string|null
     */
    private $holidayScheduleName = null;

    /**
     * @ElementName extensionDialingScope
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    private $extensionDialingScope = null;

    /**
     * @ElementName nameDialingScope
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    private $nameDialingScope = null;

    /**
     * @ElementName nameDialingEntries
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null
     */
    private $nameDialingEntries = null;

    /**
     * @ElementName businessHoursMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16|null
     */
    private $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16|null
     */
    private $afterHoursMenu = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile $serviceInstanceProfile)
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
     * @return string|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @ElementName businessHours
     * @param string|null $businessHours
     * @return $this
     */
    public function setBusinessHours($businessHours)
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    /**
     * Getter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @return string|null
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @param string|null $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }

    /**
     * Getter for extensionDialingScope
     *
     * @ElementName extensionDialingScope
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    public function getExtensionDialingScope()
    {
        return $this->extensionDialingScope;
    }

    /**
     * Setter for extensionDialingScope
     *
     * @ElementName extensionDialingScope
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null $extensionDialingScope
     * @return $this
     */
    public function setExtensionDialingScope(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope $extensionDialingScope)
    {
        $this->extensionDialingScope = $extensionDialingScope;
        return $this;
    }

    /**
     * Getter for nameDialingScope
     *
     * @ElementName nameDialingScope
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    public function getNameDialingScope()
    {
        return $this->nameDialingScope;
    }

    /**
     * Setter for nameDialingScope
     *
     * @ElementName nameDialingScope
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null $nameDialingScope
     * @return $this
     */
    public function setNameDialingScope(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope $nameDialingScope)
    {
        $this->nameDialingScope = $nameDialingScope;
        return $this;
    }

    /**
     * Getter for nameDialingEntries
     *
     * @ElementName nameDialingEntries
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null
     */
    public function getNameDialingEntries()
    {
        return $this->nameDialingEntries;
    }

    /**
     * Setter for nameDialingEntries
     *
     * @ElementName nameDialingEntries
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null $nameDialingEntries
     * @return $this
     */
    public function setNameDialingEntries(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry $nameDialingEntries)
    {
        $this->nameDialingEntries = $nameDialingEntries;
        return $this;
    }

    /**
     * Getter for businessHoursMenu
     *
     * @ElementName businessHoursMenu
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16|null
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @ElementName businessHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16|null $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16 $businessHoursMenu)
    {
        $this->businessHoursMenu = $businessHoursMenu;
        return $this;
    }

    /**
     * Getter for afterHoursMenu
     *
     * @ElementName afterHoursMenu
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16|null
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @ElementName afterHoursMenu
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16|null $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantReadMenu16 $afterHoursMenu)
    {
        $this->afterHoursMenu = $afterHoursMenu;
        return $this;
    }


}

