<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyGetResponse22
 *
 * Response to ServiceProviderDialPlanPolicyGetRequest22
 *         The following elements are only used in AS data mode:
 *           overrideResolvedDeviceDigitMap          
 *         The following elements are only used in AS data mode and not returned in XS data mode:        
 *           deviceDigitMap
 *
 * @see ServiceProviderDialPlanPolicyGetRequest22
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3665","type":"sequence"}]
 */
class ServiceProviderDialPlanPolicyGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName requiresAccessCodeForPublicCalls
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @var bool|null
     */
    private $requiresAccessCodeForPublicCalls = null;

    /**
     * @ElementName allowE164PublicCalls
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @var bool|null
     */
    private $allowE164PublicCalls = null;

    /**
     * @ElementName preferE164NumberFormatForCallbackServices
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @var bool|null
     */
    private $preferE164NumberFormatForCallbackServices = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $privateDigitMap = null;

    /**
     * @ElementName overrideResolvedDeviceDigitMap
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @var bool|null
     */
    private $overrideResolvedDeviceDigitMap = null;

    /**
     * @ElementName deviceDigitMap
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3665
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $deviceDigitMap = null;

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
     * @return string
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @param string $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
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

    /**
     * Getter for overrideResolvedDeviceDigitMap
     *
     * @return bool
     */
    public function getOverrideResolvedDeviceDigitMap()
    {
        return $this->overrideResolvedDeviceDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideResolvedDeviceDigitMap;
    }

    /**
     * Setter for overrideResolvedDeviceDigitMap
     *
     * @param bool $overrideResolvedDeviceDigitMap
     * @return $this
     */
    public function setOverrideResolvedDeviceDigitMap($overrideResolvedDeviceDigitMap)
    {
        $this->overrideResolvedDeviceDigitMap = $overrideResolvedDeviceDigitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideResolvedDeviceDigitMap()
    {
        $this->overrideResolvedDeviceDigitMap = null;
        return $this;
    }

    /**
     * Getter for deviceDigitMap
     *
     * @return string
     */
    public function getDeviceDigitMap()
    {
        return $this->deviceDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceDigitMap;
    }

    /**
     * Setter for deviceDigitMap
     *
     * @param string $deviceDigitMap
     * @return $this
     */
    public function setDeviceDigitMap($deviceDigitMap)
    {
        $this->deviceDigitMap = $deviceDigitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceDigitMap()
    {
        $this->deviceDigitMap = null;
        return $this;
    }


}

