<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicyModifyRequest
 *
 * Modify the Group level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialPlanPolicyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useSetting
     * @var string|null
     */
    private $useSetting = null;

    /**
     * @ElementName requiresAccessCodeForPublicCalls
     * @var bool|null
     */
    private $requiresAccessCodeForPublicCalls = null;

    /**
     * @ElementName allowE164PublicCalls
     * @var bool|null
     */
    private $allowE164PublicCalls = null;

    /**
     * @ElementName preferE164NumberFormatForCallbackServices
     * @var bool|null
     */
    private $preferE164NumberFormatForCallbackServices = null;

    /**
     * @ElementName publicDigitMap
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @var string|null
     */
    private $privateDigitMap = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useSetting
     *
     * @ElementName useSetting
     * @return string|null
     */
    public function getUseSetting()
    {
        return $this->useSetting;
    }

    /**
     * Setter for useSetting
     *
     * @ElementName useSetting
     * @param string|null $useSetting
     * @return $this
     */
    public function setUseSetting($useSetting)
    {
        $this->useSetting = $useSetting;
        return $this;
    }

    /**
     * Getter for requiresAccessCodeForPublicCalls
     *
     * @ElementName requiresAccessCodeForPublicCalls
     * @return bool|null
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return $this->requiresAccessCodeForPublicCalls;
    }

    /**
     * Setter for requiresAccessCodeForPublicCalls
     *
     * @ElementName requiresAccessCodeForPublicCalls
     * @param bool|null $requiresAccessCodeForPublicCalls
     * @return $this
     */
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls)
    {
        $this->requiresAccessCodeForPublicCalls = $requiresAccessCodeForPublicCalls;
        return $this;
    }

    /**
     * Getter for allowE164PublicCalls
     *
     * @ElementName allowE164PublicCalls
     * @return bool|null
     */
    public function getAllowE164PublicCalls()
    {
        return $this->allowE164PublicCalls;
    }

    /**
     * Setter for allowE164PublicCalls
     *
     * @ElementName allowE164PublicCalls
     * @param bool|null $allowE164PublicCalls
     * @return $this
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls)
    {
        $this->allowE164PublicCalls = $allowE164PublicCalls;
        return $this;
    }

    /**
     * Getter for preferE164NumberFormatForCallbackServices
     *
     * @ElementName preferE164NumberFormatForCallbackServices
     * @return bool|null
     */
    public function getPreferE164NumberFormatForCallbackServices()
    {
        return $this->preferE164NumberFormatForCallbackServices;
    }

    /**
     * Setter for preferE164NumberFormatForCallbackServices
     *
     * @ElementName preferE164NumberFormatForCallbackServices
     * @param bool|null $preferE164NumberFormatForCallbackServices
     * @return $this
     */
    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices)
    {
        $this->preferE164NumberFormatForCallbackServices = $preferE164NumberFormatForCallbackServices;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @ElementName publicDigitMap
     * @return string|null
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @ElementName publicDigitMap
     * @param string|null $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap)
    {
        $this->publicDigitMap = $publicDigitMap;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @return string|null
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @param string|null $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
        return $this;
    }


}

