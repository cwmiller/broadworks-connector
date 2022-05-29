<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallRecordingGetResponse
 *
 * Response to the EnterpriseCallRecordingGetRequest.
 *          The response contains the enterprise's Call Recording attributes.
 *
 * @see EnterpriseCallRecordingGetRequest
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:71","type":"sequence"}]
 */
class EnterpriseCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useCloudPBX
     * @Type bool
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:71
     * @var bool|null
     */
    protected $useCloudPBX = null;

    /**
     * @ElementName useEnterpriseSetting
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:71
     * @var bool|null
     */
    protected $useEnterpriseSetting = null;

    /**
     * @ElementName FQDN
     * @Type string
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:71
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $FQDN = null;

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
     * @return string
     */
    public function getFQDN()
    {
        return $this->FQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->FQDN;
    }

    /**
     * Setter for FQDN
     *
     * @param string $FQDN
     * @return $this
     */
    public function setFQDN($FQDN)
    {
        $this->FQDN = $FQDN;
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

