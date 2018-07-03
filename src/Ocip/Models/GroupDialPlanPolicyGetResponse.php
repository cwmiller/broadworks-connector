<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicyGetResponse
 *
 * Response to GroupDialPlanPolicyGetRequest
 *         Replaced by: GroupDialPlanPolicyGetResponse17
 *
 * @see GroupDialPlanPolicyGetRequest
 * @see GroupDialPlanPolicyGetResponse17
 */
class GroupDialPlanPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

