<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainParametersModifyRequest
 *
 * Request to modify system Domain parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           useAliasForDomain
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9698","type":"sequence"}]
 */
class SystemDomainParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName useAliasForDomain
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9698
     * @var bool|null
     */
    protected $useAliasForDomain = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9698
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * Getter for useAliasForDomain
     *
     * @return bool
     */
    public function getUseAliasForDomain()
    {
        return $this->useAliasForDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useAliasForDomain;
    }

    /**
     * Setter for useAliasForDomain
     *
     * @param bool $useAliasForDomain
     * @return $this
     */
    public function setUseAliasForDomain($useAliasForDomain)
    {
        $this->useAliasForDomain = $useAliasForDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseAliasForDomain()
    {
        $this->useAliasForDomain = null;
        return $this;
    }

    /**
     * Getter for defaultDomain
     *
     * @return string
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @param string $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDomain()
    {
        $this->defaultDomain = null;
        return $this;
    }
}

