<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetDefaultResponse
 *
 * Response to the ServiceProviderGetDefaultRequest. All values are default values
 * for
 *         a service provider or enterprise's profile.
 */
class ServiceProviderGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isEnterprise
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName defaultDomain
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * Getter for isEnterprise
     *
     * @ElementName isEnterprise
     * @return bool|null
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @ElementName isEnterprise
     * @param bool|null $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
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

