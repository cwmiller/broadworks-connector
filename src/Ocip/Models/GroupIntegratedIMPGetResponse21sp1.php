<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIntegratedIMPGetResponse21sp1
 *
 * Response to the GroupIntegratedIMPGetRequest21sp1.
 *         The response contains the group Integrated IMP service attributes.
 *
 * @see GroupIntegratedIMPGetRequest21sp1
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:67","type":"sequence"}]
 */
class GroupIntegratedIMPGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useServiceProviderSetting
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:67
     * @var bool|null
     */
    private $useServiceProviderSetting = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:67
     * @var string|null
     */
    private $serviceDomain = null;

    /**
     * @ElementName effectiveServiceDomain
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:67
     * @var string|null
     */
    private $effectiveServiceDomain = null;

    /**
     * @ElementName addServiceProviderInIMPUserId
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:67
     * @var bool|null
     */
    private $addServiceProviderInIMPUserId = null;

    /**
     * @ElementName defaultImpIdType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:67
     * @var \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType|null
     */
    private $defaultImpIdType = null;

    /**
     * Getter for useServiceProviderSetting
     *
     * @return bool
     */
    public function getUseServiceProviderSetting()
    {
        return $this->useServiceProviderSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderSetting;
    }

    /**
     * Setter for useServiceProviderSetting
     *
     * @param bool $useServiceProviderSetting
     * @return $this
     */
    public function setUseServiceProviderSetting($useServiceProviderSetting)
    {
        $this->useServiceProviderSetting = $useServiceProviderSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderSetting()
    {
        $this->useServiceProviderSetting = null;
        return $this;
    }

    /**
     * Getter for serviceDomain
     *
     * @return string
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @param string $serviceDomain
     * @return $this
     */
    public function setServiceDomain($serviceDomain)
    {
        $this->serviceDomain = $serviceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceDomain()
    {
        $this->serviceDomain = null;
        return $this;
    }

    /**
     * Getter for effectiveServiceDomain
     *
     * @return string
     */
    public function getEffectiveServiceDomain()
    {
        return $this->effectiveServiceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->effectiveServiceDomain;
    }

    /**
     * Setter for effectiveServiceDomain
     *
     * @param string $effectiveServiceDomain
     * @return $this
     */
    public function setEffectiveServiceDomain($effectiveServiceDomain)
    {
        $this->effectiveServiceDomain = $effectiveServiceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEffectiveServiceDomain()
    {
        $this->effectiveServiceDomain = null;
        return $this;
    }

    /**
     * Getter for addServiceProviderInIMPUserId
     *
     * @return bool
     */
    public function getAddServiceProviderInIMPUserId()
    {
        return $this->addServiceProviderInIMPUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addServiceProviderInIMPUserId;
    }

    /**
     * Setter for addServiceProviderInIMPUserId
     *
     * @param bool $addServiceProviderInIMPUserId
     * @return $this
     */
    public function setAddServiceProviderInIMPUserId($addServiceProviderInIMPUserId)
    {
        $this->addServiceProviderInIMPUserId = $addServiceProviderInIMPUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddServiceProviderInIMPUserId()
    {
        $this->addServiceProviderInIMPUserId = null;
        return $this;
    }

    /**
     * Getter for defaultImpIdType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType
     */
    public function getDefaultImpIdType()
    {
        return $this->defaultImpIdType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultImpIdType;
    }

    /**
     * Setter for defaultImpIdType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType $defaultImpIdType
     * @return $this
     */
    public function setDefaultImpIdType(\CWM\BroadWorksConnector\Ocip\Models\IntegratedIMPUserIDType $defaultImpIdType)
    {
        $this->defaultImpIdType = $defaultImpIdType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultImpIdType()
    {
        $this->defaultImpIdType = null;
        return $this;
    }


}

