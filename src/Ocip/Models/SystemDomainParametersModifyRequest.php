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
 *         The following elements are only used in AS and XS data mode and ignored in Amplify data mode:
 *           defaultDomain
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8037","type":"sequence"}]
 */
class SystemDomainParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName useAliasForDomain
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8037
     * @var bool|null
     */
    private $useAliasForDomain = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8037
     * @var string|null
     */
    private $defaultDomain = null;

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

