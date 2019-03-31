<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadCloudGetResponse
 *
 * Response to the SystemBroadCloudGetRequest.
 *         The response contains the system interface attributes for Messaging Server/BroadCloud.
 *
 * @see SystemBroadCloudGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2108","type":"sequence"}]
 */
class SystemBroadCloudGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2108
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2108
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $provisioningUserId = null;

    /**
     * @ElementName enableSynchronization
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2108
     * @var bool|null
     */
    private $enableSynchronization = null;

    /**
     * Getter for provisioningUrl
     *
     * @return string
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @param string $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        $this->provisioningUrl = $provisioningUrl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningUrl()
    {
        $this->provisioningUrl = null;
        return $this;
    }

    /**
     * Getter for provisioningUserId
     *
     * @return string
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @param string $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        $this->provisioningUserId = $provisioningUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningUserId()
    {
        $this->provisioningUserId = null;
        return $this;
    }

    /**
     * Getter for enableSynchronization
     *
     * @return bool
     */
    public function getEnableSynchronization()
    {
        return $this->enableSynchronization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSynchronization;
    }

    /**
     * Setter for enableSynchronization
     *
     * @param bool $enableSynchronization
     * @return $this
     */
    public function setEnableSynchronization($enableSynchronization)
    {
        $this->enableSynchronization = $enableSynchronization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSynchronization()
    {
        $this->enableSynchronization = null;
        return $this;
    }


}

