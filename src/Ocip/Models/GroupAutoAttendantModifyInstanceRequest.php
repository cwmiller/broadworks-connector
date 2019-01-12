<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantModifyInstanceRequest
 *
 * Request to modify an Auto Attendant instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupAutoAttendantModifyInstanceRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupAutoAttendantModifyInstanceRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:7976","type":"sequence"}]
 */
class GroupAutoAttendantModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName businessHours
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $businessHours = null;

    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holidayScheduleName = null;

    /**
     * @ElementName extensionDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    private $extensionDialingScope = null;

    /**
     * @ElementName nameDialingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantDialingScope|null
     */
    private $nameDialingScope = null;

    /**
     * @ElementName nameDialingEntries
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantNameDialingEntry|null
     */
    private $nameDialingEntries = null;

    /**
     * @ElementName businessHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu|null
     */
    private $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:7976
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu|null
     */
    private $afterHoursMenu = null;

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
     * @return string|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param string|null $businessHours
     * @return $this
     */
    public function setBusinessHours($businessHours)
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
     * Getter for holidayScheduleName
     *
     * @return string|null
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @param string|null $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        if ($holidayScheduleName === null) {
            $this->holidayScheduleName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holidayScheduleName = $holidayScheduleName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayScheduleName()
    {
        $this->holidayScheduleName = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu $businessHoursMenu)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenu $afterHoursMenu)
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


}

