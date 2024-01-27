<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainParametersGetResponse
 *
 * Response to SystemDomainParametersGetRequest.
 *         Contains the system Domain parameters.
 *         
 *         The following elements are only used in AS data mode:
 *           useAliasForDomain, value "false" is returned in XS data mode.
 *
 * @see SystemDomainParametersGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9677","type":"sequence"}]
 */
class SystemDomainParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useAliasForDomain
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9677
     * @var bool|null
     */
    protected $useAliasForDomain = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9677
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

