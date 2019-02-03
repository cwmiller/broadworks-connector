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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8143","type":"sequence"}]
 */
class SystemDialPlanPolicyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName requiresAccessCodeForPublicCalls
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8143
     * @var bool|null
     */
    private $requiresAccessCodeForPublicCalls = null;

    /**
     * @ElementName allowE164PublicCalls
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8143
     * @var bool|null
     */
    private $allowE164PublicCalls = null;

    /**
     * @ElementName preferE164NumberFormatForCallbackServices
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8143
     * @var bool|null
     */
    private $preferE164NumberFormatForCallbackServices = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8143
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8143
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $privateDigitMap = null;

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
     * @return string
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @param string $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap)
    {
        $this->publicDigitMap = $publicDigitMap;
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

