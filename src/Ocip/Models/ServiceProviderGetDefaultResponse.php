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
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4431","type":"sequence"}]
 */
class ServiceProviderGetDefaultResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4431
     * @var bool|null
     */
    protected $isEnterprise = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4431
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

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

