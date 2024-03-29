<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetProvisioningParametersResponse24
 *
 * Response to the SystemSubscriberGetProvisioningParametersRequest24.
 *         
 *         Replaced by: SystemSubscriberGetProvisioningParametersResponse24V2.
 *
 * @see SystemSubscriberGetProvisioningParametersRequest24
 * @see SystemSubscriberGetProvisioningParametersResponse24V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:35992","type":"sequence"}]
 */
class SystemSubscriberGetProvisioningParametersResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName configurableCLIDNormalization
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:35992
     * @var bool|null
     */
    protected $configurableCLIDNormalization = null;

    /**
     * @ElementName includeDefaultDomain
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:35992
     * @var bool|null
     */
    protected $includeDefaultDomain = null;

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
}

