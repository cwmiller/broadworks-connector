<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetDefaultResponse
 *
 * Response to the ServiceProviderGetDefaultRequest. All values are default values for
 *         a service provider or enterprise's profile.
 *         
 *         The following elements are only used in AS and XS data mode and not returned in Amplify data mode.
 *           defaultDomain
 *
 * @see ServiceProviderGetDefaultRequest
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:3507","type":"sequence"}]
 */
class ServiceProviderGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3507
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3507
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * Getter for isEnterprise
     *
     * @return bool
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @param bool $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnterprise()
    {
        $this->isEnterprise = null;
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

