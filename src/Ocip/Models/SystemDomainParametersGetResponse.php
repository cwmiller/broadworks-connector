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
 *         The following elements are only used in AS and XS data mode and not returned in Amplify data mode.
 *           defaultDomain
 *
 * @see SystemDomainParametersGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9557","type":"sequence"}]
 */
class SystemDomainParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useAliasForDomain
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9557
     * @var bool|null
     */
    protected $useAliasForDomain = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9557
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

