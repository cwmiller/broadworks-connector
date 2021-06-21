<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForTrunkGroup
 *
 * Passwords to be generated for a trunk group.
 *         The combination of serviceProviderId, groupId, and name will be used to
 *         find the trunk group if it exists. If the trunk group doesn't exist yet,
 *         then the serviceProviderId and groupId will be used to choose the password
 *         rules with which to generate the trunk group password.
 *
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:779","type":"sequence"}]
 */
class PasswordForTrunkGroup
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:779
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:779
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:779
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName generateTrunkGroupAuthenticationPassword
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:779
     * @var bool|null
     */
    private $generateTrunkGroupAuthenticationPassword = null;

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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for generateTrunkGroupAuthenticationPassword
     *
     * @return bool
     */
    public function getGenerateTrunkGroupAuthenticationPassword()
    {
        return $this->generateTrunkGroupAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generateTrunkGroupAuthenticationPassword;
    }

    /**
     * Setter for generateTrunkGroupAuthenticationPassword
     *
     * @param bool $generateTrunkGroupAuthenticationPassword
     * @return $this
     */
    public function setGenerateTrunkGroupAuthenticationPassword($generateTrunkGroupAuthenticationPassword)
    {
        $this->generateTrunkGroupAuthenticationPassword = $generateTrunkGroupAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGenerateTrunkGroupAuthenticationPassword()
    {
        $this->generateTrunkGroupAuthenticationPassword = null;
        return $this;
    }


}

