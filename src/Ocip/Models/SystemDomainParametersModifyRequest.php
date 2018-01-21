<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainParametersModifyRequest
 *
 * Request to modify system Domain parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
 *           useAliasForDomain
 *           
 *         The following elements are only used in AS and XS data mode and ignored
 * in Amplify data mode:
 *           defaultDomain
 */
class SystemDomainParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

