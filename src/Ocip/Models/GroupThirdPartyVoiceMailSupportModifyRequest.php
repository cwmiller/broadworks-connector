<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupThirdPartyVoiceMailSupportModifyRequest
 *
 * Modify the Third Party Voice Mail Support settings for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"21e97b8199c6e7eff29a84874335b46e:86","type":"sequence"}]
 */
class GroupThirdPartyVoiceMailSupportModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 21e97b8199c6e7eff29a84874335b46e:86
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 21e97b8199c6e7eff29a84874335b46e:86
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:86
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName groupServer
     * @Type string
     * @Nillable
     * @Optional
     * @Group 21e97b8199c6e7eff29a84874335b46e:86
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $groupServer = null;

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
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for groupServer
     *
     * @return string|null
     */
    public function getGroupServer()
    {
        return $this->groupServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServer;
    }

    /**
     * Setter for groupServer
     *
     * @param string|null $groupServer
     * @return $this
     */
    public function setGroupServer($groupServer = null)
    {
        if ($groupServer === null) {
            $this->groupServer = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->groupServer = $groupServer;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServer()
    {
        $this->groupServer = null;
        return $this;
    }
}

