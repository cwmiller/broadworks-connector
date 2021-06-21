<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallRecordingModifyRequest
 *
 * Modify the Call Recording attributes for a enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:88","type":"sequence"}]
 */
class EnterpriseCallRecordingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:88
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName useCloudPBX
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:88
     * @var bool|null
     */
    private $useCloudPBX = null;

    /**
     * @ElementName useEnterpriseSetting
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:88
     * @var bool|null
     */
    private $useEnterpriseSetting = null;

    /**
     * @ElementName FQDN
     * @Type string
     * @Nillable
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:88
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $FQDN = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for useCloudPBX
     *
     * @return bool
     */
    public function getUseCloudPBX()
    {
        return $this->useCloudPBX instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCloudPBX;
    }

    /**
     * Setter for useCloudPBX
     *
     * @param bool $useCloudPBX
     * @return $this
     */
    public function setUseCloudPBX($useCloudPBX)
    {
        $this->useCloudPBX = $useCloudPBX;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCloudPBX()
    {
        $this->useCloudPBX = null;
        return $this;
    }

    /**
     * Getter for useEnterpriseSetting
     *
     * @return bool
     */
    public function getUseEnterpriseSetting()
    {
        return $this->useEnterpriseSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useEnterpriseSetting;
    }

    /**
     * Setter for useEnterpriseSetting
     *
     * @param bool $useEnterpriseSetting
     * @return $this
     */
    public function setUseEnterpriseSetting($useEnterpriseSetting)
    {
        $this->useEnterpriseSetting = $useEnterpriseSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseEnterpriseSetting()
    {
        $this->useEnterpriseSetting = null;
        return $this;
    }

    /**
     * Getter for FQDN
     *
     * @return string|null
     */
    public function getFQDN()
    {
        return $this->FQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->FQDN;
    }

    /**
     * Setter for FQDN
     *
     * @param string|null $FQDN
     * @return $this
     */
    public function setFQDN($FQDN = null)
    {
        if ($FQDN === null) {
            $this->FQDN = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->FQDN = $FQDN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFQDN()
    {
        $this->FQDN = null;
        return $this;
    }


}

