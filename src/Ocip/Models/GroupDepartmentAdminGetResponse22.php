<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetResponse22
 *
 * Response to the GroupDepartmentAdminGetRequest.
 *         The response contains the group department administrators profile information.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode.
 *         accountDisabled
 *         lastAuthenticatedDate
 *         Replaced by: GroupDepartmentAdminGetResponse22V2
 *
 * @see GroupDepartmentAdminGetRequest
 * @see GroupDepartmentAdminGetResponse22V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:2795","type":"sequence"}]
 */
class GroupDepartmentAdminGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null
     */
    protected $departmentKey = null;

    /**
     * @ElementName departmentFullPath
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $departmentFullPath = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName accountDisabled
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @var bool|null
     */
    protected $accountDisabled = null;

    /**
     * @ElementName lastAuthenticatedDate
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:2795
     * @var string|null
     */
    protected $lastAuthenticatedDate = null;

    /**
     * Getter for departmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey $departmentKey
     * @return $this
     */
    public function setDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey $departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentKey()
    {
        $this->departmentKey = null;
        return $this;
    }

    /**
     * Getter for departmentFullPath
     *
     * @return string
     */
    public function getDepartmentFullPath()
    {
        return $this->departmentFullPath instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentFullPath;
    }

    /**
     * Setter for departmentFullPath
     *
     * @param string $departmentFullPath
     * @return $this
     */
    public function setDepartmentFullPath($departmentFullPath)
    {
        $this->departmentFullPath = $departmentFullPath;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentFullPath()
    {
        $this->departmentFullPath = null;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for accountDisabled
     *
     * @return bool
     */
    public function getAccountDisabled()
    {
        return $this->accountDisabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountDisabled;
    }

    /**
     * Setter for accountDisabled
     *
     * @param bool $accountDisabled
     * @return $this
     */
    public function setAccountDisabled($accountDisabled)
    {
        $this->accountDisabled = $accountDisabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountDisabled()
    {
        $this->accountDisabled = null;
        return $this;
    }

    /**
     * Getter for lastAuthenticatedDate
     *
     * @return string
     */
    public function getLastAuthenticatedDate()
    {
        return $this->lastAuthenticatedDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastAuthenticatedDate;
    }

    /**
     * Setter for lastAuthenticatedDate
     *
     * @param string $lastAuthenticatedDate
     * @return $this
     */
    public function setLastAuthenticatedDate($lastAuthenticatedDate)
    {
        $this->lastAuthenticatedDate = $lastAuthenticatedDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastAuthenticatedDate()
    {
        $this->lastAuthenticatedDate = null;
        return $this;
    }
}

