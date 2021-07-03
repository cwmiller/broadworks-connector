<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAttendantConsoleGetResponse
 *
 * Response to UserAttendantConsoleGetRequest.
 *
 * @see UserAttendantConsoleGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:39558","type":"sequence"}]
 */
class UserAttendantConsoleGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName launchOnLogin
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39558
     * @var bool|null
     */
    private $launchOnLogin = null;

    /**
     * @ElementName allowUserConfigCallDetails
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39558
     * @var bool|null
     */
    private $allowUserConfigCallDetails = null;

    /**
     * @ElementName allowUserViewCallDetails
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39558
     * @var bool|null
     */
    private $allowUserViewCallDetails = null;

    /**
     * @ElementName displayColumn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39558
     * @var \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn[]
     */
    private $displayColumn = array(
        
    );

    /**
     * Getter for launchOnLogin
     *
     * @return bool
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->launchOnLogin;
    }

    /**
     * Setter for launchOnLogin
     *
     * @param bool $launchOnLogin
     * @return $this
     */
    public function setLaunchOnLogin($launchOnLogin)
    {
        $this->launchOnLogin = $launchOnLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLaunchOnLogin()
    {
        $this->launchOnLogin = null;
        return $this;
    }

    /**
     * Getter for allowUserConfigCallDetails
     *
     * @return bool
     */
    public function getAllowUserConfigCallDetails()
    {
        return $this->allowUserConfigCallDetails instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUserConfigCallDetails;
    }

    /**
     * Setter for allowUserConfigCallDetails
     *
     * @param bool $allowUserConfigCallDetails
     * @return $this
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails)
    {
        $this->allowUserConfigCallDetails = $allowUserConfigCallDetails;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUserConfigCallDetails()
    {
        $this->allowUserConfigCallDetails = null;
        return $this;
    }

    /**
     * Getter for allowUserViewCallDetails
     *
     * @return bool
     */
    public function getAllowUserViewCallDetails()
    {
        return $this->allowUserViewCallDetails instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUserViewCallDetails;
    }

    /**
     * Setter for allowUserViewCallDetails
     *
     * @param bool $allowUserViewCallDetails
     * @return $this
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails)
    {
        $this->allowUserViewCallDetails = $allowUserViewCallDetails;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUserViewCallDetails()
    {
        $this->allowUserViewCallDetails = null;
        return $this;
    }

    /**
     * Getter for displayColumn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn[]
     */
    public function getDisplayColumn()
    {
        return $this->displayColumn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayColumn;
    }

    /**
     * Setter for displayColumn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn[] $displayColumn
     * @return $this
     */
    public function setDisplayColumn(array $displayColumn)
    {
        $this->displayColumn = $displayColumn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayColumn()
    {
        $this->displayColumn = null;
        return $this;
    }

    /**
     * Adder for displayColumn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AttendantConsoleDisplayColumn $displayColumn
     * @return $this
     */
    public function addDisplayColumn($displayColumn)
    {
        $this->displayColumn[] = $displayColumn;
        return $this;
    }


}

