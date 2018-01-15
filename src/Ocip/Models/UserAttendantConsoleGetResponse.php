<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAttendantConsoleGetResponse
 *
 * Response to UserAttendantConsoleGetRequest.
 */
class UserAttendantConsoleGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName launchOnLogin
     * @var bool|null
     */
    private $launchOnLogin = null;

    /**
     * @ElementName allowUserConfigCallDetails
     * @var bool|null
     */
    private $allowUserConfigCallDetails = null;

    /**
     * @ElementName allowUserViewCallDetails
     * @var bool|null
     */
    private $allowUserViewCallDetails = null;

    /**
     * @ElementName displayColumn
     * @var string[]
     */
    private $displayColumn = array(
        
    );

    /**
     * Getter for launchOnLogin
     *
     * @ElementName launchOnLogin
     * @return bool|null
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin;
    }

    /**
     * Setter for launchOnLogin
     *
     * @ElementName launchOnLogin
     * @param bool|null $launchOnLogin
     * @return $this
     */
    public function setLaunchOnLogin($launchOnLogin)
    {
        $this->launchOnLogin = $launchOnLogin;
        return $this;
    }

    /**
     * Getter for allowUserConfigCallDetails
     *
     * @ElementName allowUserConfigCallDetails
     * @return bool|null
     */
    public function getAllowUserConfigCallDetails()
    {
        return $this->allowUserConfigCallDetails;
    }

    /**
     * Setter for allowUserConfigCallDetails
     *
     * @ElementName allowUserConfigCallDetails
     * @param bool|null $allowUserConfigCallDetails
     * @return $this
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails)
    {
        $this->allowUserConfigCallDetails = $allowUserConfigCallDetails;
        return $this;
    }

    /**
     * Getter for allowUserViewCallDetails
     *
     * @ElementName allowUserViewCallDetails
     * @return bool|null
     */
    public function getAllowUserViewCallDetails()
    {
        return $this->allowUserViewCallDetails;
    }

    /**
     * Setter for allowUserViewCallDetails
     *
     * @ElementName allowUserViewCallDetails
     * @param bool|null $allowUserViewCallDetails
     * @return $this
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails)
    {
        $this->allowUserViewCallDetails = $allowUserViewCallDetails;
        return $this;
    }

    /**
     * Getter for displayColumn
     *
     * @ElementName displayColumn
     * @return string[]
     */
    public function getDisplayColumn()
    {
        return $this->displayColumn;
    }

    /**
     * Setter for displayColumn
     *
     * @ElementName displayColumn
     * @param string[] $displayColumn
     * @return $this
     */
    public function setDisplayColumn($displayColumn)
    {
        $this->displayColumn = $displayColumn;
        return $this;
    }

    /**
     * Adder for displayColumn
     *
     * @ElementName displayColumn
     * @param string $displayColumn
     * @return $this
     */
    public function addDisplayColumn($displayColumn)
    {
        $this->displayColumn []= $displayColumn;
        return $this;
    }


}

