<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyProvisioningParametersRequest
 *
 * Modify the system provisioning configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18745","type":"sequence"}]
 */
class SystemSubscriberModifyProvisioningParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName configurableCLIDNormalization
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18745
     * @var bool|null
     */
    protected $configurableCLIDNormalization = null;

    /**
     * @ElementName includeDefaultDomain
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18745
     * @var bool|null
     */
    protected $includeDefaultDomain = null;

    /**
     * @ElementName minAuthLevelToProvisionAltUserID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18745
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID|null
     */
    protected $minAuthLevelToProvisionAltUserID = null;

    /**
     * @ElementName blockUnauthorizationWhenVSubInstanceExists
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18745
     * @var bool|null
     */
    protected $blockUnauthorizationWhenVSubInstanceExists = null;

    /**
     * Getter for configurableCLIDNormalization
     *
     * @return bool
     */
    public function getConfigurableCLIDNormalization()
    {
        return $this->configurableCLIDNormalization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurableCLIDNormalization;
    }

    /**
     * Setter for configurableCLIDNormalization
     *
     * @param bool $configurableCLIDNormalization
     * @return $this
     */
    public function setConfigurableCLIDNormalization($configurableCLIDNormalization)
    {
        $this->configurableCLIDNormalization = $configurableCLIDNormalization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurableCLIDNormalization()
    {
        $this->configurableCLIDNormalization = null;
        return $this;
    }

    /**
     * Getter for includeDefaultDomain
     *
     * @return bool
     */
    public function getIncludeDefaultDomain()
    {
        return $this->includeDefaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeDefaultDomain;
    }

    /**
     * Setter for includeDefaultDomain
     *
     * @param bool $includeDefaultDomain
     * @return $this
     */
    public function setIncludeDefaultDomain($includeDefaultDomain)
    {
        $this->includeDefaultDomain = $includeDefaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDefaultDomain()
    {
        $this->includeDefaultDomain = null;
        return $this;
    }

    /**
     * Getter for minAuthLevelToProvisionAltUserID
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID
     */
    public function getMinAuthLevelToProvisionAltUserID()
    {
        return $this->minAuthLevelToProvisionAltUserID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minAuthLevelToProvisionAltUserID;
    }

    /**
     * Setter for minAuthLevelToProvisionAltUserID
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID $minAuthLevelToProvisionAltUserID
     * @return $this
     */
    public function setMinAuthLevelToProvisionAltUserID(\CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID $minAuthLevelToProvisionAltUserID)
    {
        $this->minAuthLevelToProvisionAltUserID = $minAuthLevelToProvisionAltUserID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinAuthLevelToProvisionAltUserID()
    {
        $this->minAuthLevelToProvisionAltUserID = null;
        return $this;
    }

    /**
     * Getter for blockUnauthorizationWhenVSubInstanceExists
     *
     * @return bool
     */
    public function getBlockUnauthorizationWhenVSubInstanceExists()
    {
        return $this->blockUnauthorizationWhenVSubInstanceExists instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockUnauthorizationWhenVSubInstanceExists;
    }

    /**
     * Setter for blockUnauthorizationWhenVSubInstanceExists
     *
     * @param bool $blockUnauthorizationWhenVSubInstanceExists
     * @return $this
     */
    public function setBlockUnauthorizationWhenVSubInstanceExists($blockUnauthorizationWhenVSubInstanceExists)
    {
        $this->blockUnauthorizationWhenVSubInstanceExists = $blockUnauthorizationWhenVSubInstanceExists;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockUnauthorizationWhenVSubInstanceExists()
    {
        $this->blockUnauthorizationWhenVSubInstanceExists = null;
        return $this;
    }
}

