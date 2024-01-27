<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetProvisioningParametersResponse23
 *
 * Response to the SystemSubscriberGetProvisioningParametersRequest23.
 *         
 *         Replaced by: SystemSubscriberGetProvisioningParametersResponse24V2.
 *
 * @see SystemSubscriberGetProvisioningParametersRequest23
 * @see SystemSubscriberGetProvisioningParametersResponse24V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:35974","type":"sequence"}]
 */
class SystemSubscriberGetProvisioningParametersResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName configurableCLIDNormalization
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:35974
     * @var bool|null
     */
    protected $configurableCLIDNormalization = null;

    /**
     * @ElementName minAuthLevelToProvisionAltUserID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID
     * @Group d8f04177e438f303b41c211e518706bf:35974
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

