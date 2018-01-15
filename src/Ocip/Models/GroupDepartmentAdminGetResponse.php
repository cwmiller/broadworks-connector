<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetResponse
 *
 * Response to the GroupDepartmentAdminGetRequest.
 *         The response contains the group department administrators profile
 * information.
 */
class GroupDepartmentAdminGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentFullPath
     * @var string|null
     */
    private $departmentFullPath = null;

    /**
     * @ElementName firstName
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * Getter for departmentKey
     *
     * @ElementName departmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @ElementName departmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null $departmentKey
     * @return $this
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * Getter for departmentFullPath
     *
     * @ElementName departmentFullPath
     * @return string|null
     */
    public function getDepartmentFullPath()
    {
        return $this->departmentFullPath;
    }

    /**
     * Setter for departmentFullPath
     *
     * @ElementName departmentFullPath
     * @param string|null $departmentFullPath
     * @return $this
     */
    public function setDepartmentFullPath($departmentFullPath)
    {
        $this->departmentFullPath = $departmentFullPath;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @ElementName firstName
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @ElementName firstName
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @ElementName lastName
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @ElementName lastName
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }


}

