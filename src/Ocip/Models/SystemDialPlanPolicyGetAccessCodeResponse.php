<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyGetAccessCodeResponse
 *
 * Response to SystemDialPlanPolicyGetAccessCodeRequest
 *
 * @see SystemDialPlanPolicyGetAccessCodeRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9243","type":"sequence"}]
 */
class SystemDialPlanPolicyGetAccessCodeResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9243
     * @var bool|null
     */
    protected $includeCodeForNetworkTranslationsAndRouting = null;

    /**
     * @ElementName includeCodeForScreeningServices
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9243
     * @var bool|null
     */
    protected $includeCodeForScreeningServices = null;

    /**
     * @ElementName enableSecondaryDialTone
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9243
     * @var bool|null
     */
    protected $enableSecondaryDialTone = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9243
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * Getter for includeCodeForNetworkTranslationsAndRouting
     *
     * @return bool
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return $this->includeCodeForNetworkTranslationsAndRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * Setter for includeCodeForNetworkTranslationsAndRouting
     *
     * @param bool $includeCodeForNetworkTranslationsAndRouting
     * @return $this
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = $includeCodeForNetworkTranslationsAndRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCodeForNetworkTranslationsAndRouting()
    {
        $this->includeCodeForNetworkTranslationsAndRouting = null;
        return $this;
    }

    /**
     * Getter for includeCodeForScreeningServices
     *
     * @return bool
     */
    public function getIncludeCodeForScreeningServices()
    {
        return $this->includeCodeForScreeningServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCodeForScreeningServices;
    }

    /**
     * Setter for includeCodeForScreeningServices
     *
     * @param bool $includeCodeForScreeningServices
     * @return $this
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices)
    {
        $this->includeCodeForScreeningServices = $includeCodeForScreeningServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCodeForScreeningServices()
    {
        $this->includeCodeForScreeningServices = null;
        return $this;
    }

    /**
     * Getter for enableSecondaryDialTone
     *
     * @return bool
     */
    public function getEnableSecondaryDialTone()
    {
        return $this->enableSecondaryDialTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSecondaryDialTone;
    }

    /**
     * Setter for enableSecondaryDialTone
     *
     * @param bool $enableSecondaryDialTone
     * @return $this
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone)
    {
        $this->enableSecondaryDialTone = $enableSecondaryDialTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSecondaryDialTone()
    {
        $this->enableSecondaryDialTone = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

