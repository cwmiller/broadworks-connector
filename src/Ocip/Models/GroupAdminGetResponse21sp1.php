<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetResponse21sp1
 *
 * Response to the GroupAdminGetRequest21sp1.
 *         The response contains the group administrators  profile information.
 *         Replaced by: GroupAdminGetResponse22.
 *
 * @see GroupAdminGetRequest21sp1
 * @see GroupAdminGetResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:1546","type":"sequence"}]
 */
class GroupAdminGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MaxLength 5
     * @var string|null
     */
    protected $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1546
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $encoding = null;

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
     * Getter for locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locale;
    }

    /**
     * Setter for locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocale()
    {
        $this->locale = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
        return $this;
    }
}

