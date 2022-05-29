<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserLanguageModifyRequest
 *
 * Request to modify language of the users within a group.
 *         If neither applyToUsers nor applyToServiceInstances is specified in the request, language is not changed for any user in the group.
 *         If applyToUsers is specified, regular users within the group have the language modified.
 *         If applyToServiceInstances is specified, the service instance users within the group have the language modified.
 *
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8855","type":"sequence"}]
 */
class GroupUserLanguageModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8855
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8855
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName language
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8855
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName applyToUsers
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8855
     * @var bool|null
     */
    protected $applyToUsers = null;

    /**
     * @ElementName applyToServiceInstances
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8855
     * @var bool|null
     */
    protected $applyToServiceInstances = null;

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
     * Getter for applyToUsers
     *
     * @return bool
     */
    public function getApplyToUsers()
    {
        return $this->applyToUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applyToUsers;
    }

    /**
     * Setter for applyToUsers
     *
     * @param bool $applyToUsers
     * @return $this
     */
    public function setApplyToUsers($applyToUsers)
    {
        $this->applyToUsers = $applyToUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplyToUsers()
    {
        $this->applyToUsers = null;
        return $this;
    }

    /**
     * Getter for applyToServiceInstances
     *
     * @return bool
     */
    public function getApplyToServiceInstances()
    {
        return $this->applyToServiceInstances instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applyToServiceInstances;
    }

    /**
     * Setter for applyToServiceInstances
     *
     * @param bool $applyToServiceInstances
     * @return $this
     */
    public function setApplyToServiceInstances($applyToServiceInstances)
    {
        $this->applyToServiceInstances = $applyToServiceInstances;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplyToServiceInstances()
    {
        $this->applyToServiceInstances = null;
        return $this;
    }


}

