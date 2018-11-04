<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyModifyRequest
 *
 * Modify the system level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemDialPlanPolicyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $privateDigitMap = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
        return $this;
    }


}

