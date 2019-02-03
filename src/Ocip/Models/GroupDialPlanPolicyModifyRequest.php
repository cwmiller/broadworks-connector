<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicyModifyRequest
 *
 * Modify the Group level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3987","type":"sequence"}]
 */
class GroupDialPlanPolicyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicySettingLevel
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicySettingLevel|null
     */
    private $useSetting = null;

    /**
     * @ElementName requiresAccessCodeForPublicCalls
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var bool|null
     */
    private $requiresAccessCodeForPublicCalls = null;

    /**
     * @ElementName allowE164PublicCalls
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var bool|null
     */
    private $allowE164PublicCalls = null;

    /**
     * @ElementName preferE164NumberFormatForCallbackServices
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var bool|null
     */
    private $preferE164NumberFormatForCallbackServices = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3987
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $privateDigitMap = null;

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
     * Getter for useSetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicySettingLevel
     */
    public function getUseSetting()
    {
        return $this->useSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSetting;
    }

    /**
     * Setter for useSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicySettingLevel $useSetting
     * @return $this
     */
    public function setUseSetting(\CWM\BroadWorksConnector\Ocip\Models\GroupDialPlanPolicySettingLevel $useSetting)
    {
        $this->useSetting = $useSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSetting()
    {
        $this->useSetting = null;
        return $this;
    }

    /**
     * Getter for requiresAccessCodeForPublicCalls
     *
     * @return bool
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return $this->requiresAccessCodeForPublicCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requiresAccessCodeForPublicCalls;
    }

    /**
     * Setter for requiresAccessCodeForPublicCalls
     *
     * @param bool $requiresAccessCodeForPublicCalls
     * @return $this
     */
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls)
    {
        $this->requiresAccessCodeForPublicCalls = $requiresAccessCodeForPublicCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequiresAccessCodeForPublicCalls()
    {
        $this->requiresAccessCodeForPublicCalls = null;
        return $this;
    }

    /**
     * Getter for allowE164PublicCalls
     *
     * @return bool
     */
    public function getAllowE164PublicCalls()
    {
        return $this->allowE164PublicCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowE164PublicCalls;
    }

    /**
     * Setter for allowE164PublicCalls
     *
     * @param bool $allowE164PublicCalls
     * @return $this
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls)
    {
        $this->allowE164PublicCalls = $allowE164PublicCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowE164PublicCalls()
    {
        $this->allowE164PublicCalls = null;
        return $this;
    }

    /**
     * Getter for preferE164NumberFormatForCallbackServices
     *
     * @return bool
     */
    public function getPreferE164NumberFormatForCallbackServices()
    {
        return $this->preferE164NumberFormatForCallbackServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferE164NumberFormatForCallbackServices;
    }

    /**
     * Setter for preferE164NumberFormatForCallbackServices
     *
     * @param bool $preferE164NumberFormatForCallbackServices
     * @return $this
     */
    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices)
    {
        $this->preferE164NumberFormatForCallbackServices = $preferE164NumberFormatForCallbackServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferE164NumberFormatForCallbackServices()
    {
        $this->preferE164NumberFormatForCallbackServices = null;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @return string|null
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @param string|null $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        if ($publicDigitMap === null) {
            $this->publicDigitMap = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->publicDigitMap = $publicDigitMap;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicDigitMap()
    {
        $this->publicDigitMap = null;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @return string|null
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @param string|null $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if ($privateDigitMap === null) {
            $this->privateDigitMap = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->privateDigitMap = $privateDigitMap;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateDigitMap()
    {
        $this->privateDigitMap = null;
        return $this;
    }


}

