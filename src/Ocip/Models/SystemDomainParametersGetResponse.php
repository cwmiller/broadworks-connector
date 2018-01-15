<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainParametersGetResponse
 *
 * Response to SystemDomainParametersGetRequest.
 *         Contains the system Domain parameters.
 */
class SystemDomainParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useAliasForDomain
     * @var bool|null
     */
    private $useAliasForDomain = null;

    /**
     * @ElementName defaultDomain
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * Getter for useAliasForDomain
     *
     * @ElementName useAliasForDomain
     * @return bool|null
     */
    public function getUseAliasForDomain()
    {
        return $this->useAliasForDomain;
    }

    /**
     * Setter for useAliasForDomain
     *
     * @ElementName useAliasForDomain
     * @param bool|null $useAliasForDomain
     * @return $this
     */
    public function setUseAliasForDomain($useAliasForDomain)
    {
        $this->useAliasForDomain = $useAliasForDomain;
        return $this;
    }

    /**
     * Getter for defaultDomain
     *
     * @ElementName defaultDomain
     * @return string|null
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @ElementName defaultDomain
     * @param string|null $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }


}

