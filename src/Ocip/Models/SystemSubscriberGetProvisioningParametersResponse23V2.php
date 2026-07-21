<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetProvisioningParametersResponse23V2
 *
 * Response to the SystemSubscriberGetProvisioningParametersRequest23V2.
 *         
 *         Replaced by: SystemSubscriberGetProvisioningParametersResponse24V3.
 *
 * @see SystemSubscriberGetProvisioningParametersRequest23V2
 * @see SystemSubscriberGetProvisioningParametersResponse24V3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:40646","type":"sequence"}]
 */
class SystemSubscriberGetProvisioningParametersResponse23V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName configurableCLIDNormalization
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:40646
     * @var bool|null
     */
    protected $configurableCLIDNormalization = null;

    /**
     * @ElementName minAuthLevelToProvisionAltUserID
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID
     * @Group d8f04177e438f303b41c211e518706bf:40646
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthorizationLevelToProvisionAlternateUserID|null
     */
    protected $minAuthLevelToProvisionAltUserID = null;

    /**
     * @ElementName blockUnauthorizationWhenVSubInstanceExists
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:40646
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

