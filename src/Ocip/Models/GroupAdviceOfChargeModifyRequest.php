<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdviceOfChargeModifyRequest
 *
 * Modify the service provider level Advice Of Charge group settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a69fde15f3aa7494d83b57461a7a70bb:85","type":"sequence"}]
 */
class GroupAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group a69fde15f3aa7494d83b57461a7a70bb:85
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group a69fde15f3aa7494d83b57461a7a70bb:85
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName useGroupLevelAoCSettings
     * @Type bool
     * @Optional
     * @Group a69fde15f3aa7494d83b57461a7a70bb:85
     * @var bool|null
     */
    protected $useGroupLevelAoCSettings = null;

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @Type int
     * @Optional
     * @Group a69fde15f3aa7494d83b57461a7a70bb:85
     * @MinInclusive 5
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $delayBetweenNotificationSeconds = null;

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
     * Getter for useGroupLevelAoCSettings
     *
     * @return bool
     */
    public function getUseGroupLevelAoCSettings()
    {
        return $this->useGroupLevelAoCSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupLevelAoCSettings;
    }

    /**
     * Setter for useGroupLevelAoCSettings
     *
     * @param bool $useGroupLevelAoCSettings
     * @return $this
     */
    public function setUseGroupLevelAoCSettings($useGroupLevelAoCSettings)
    {
        $this->useGroupLevelAoCSettings = $useGroupLevelAoCSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupLevelAoCSettings()
    {
        $this->useGroupLevelAoCSettings = null;
        return $this;
    }

    /**
     * Getter for delayBetweenNotificationSeconds
     *
     * @return int
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->delayBetweenNotificationSeconds;
    }

    /**
     * Setter for delayBetweenNotificationSeconds
     *
     * @param int $delayBetweenNotificationSeconds
     * @return $this
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDelayBetweenNotificationSeconds()
    {
        $this->delayBetweenNotificationSeconds = null;
        return $this;
    }


}

