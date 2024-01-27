<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetProvisioningParametersResponse24V2
 *
 * Response to the SystemSubscriberGetProvisioningParametersRequest24V2.
 *
 * @see SystemSubscriberGetProvisioningParametersRequest24V2
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18285","type":"sequence"}]
 */
class SystemSubscriberGetProvisioningParametersResponse24V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName configurableCLIDNormalization
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:18285
     * @var bool|null
     */
    protected $configurableCLIDNormalization = null;

    /**
     * @ElementName includeDefaultDomain
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:18285
     * @var bool|null
     */
    protected $includeDefaultDomain = null;

    /**
     * @ElementName minAuthLevelToProvisionAltUserID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID
     * @Group da582a1f8028404e70d260cf1f891033:18285
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID|null
     */
    protected $minAuthLevelToProvisionAltUserID = null;

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
}

