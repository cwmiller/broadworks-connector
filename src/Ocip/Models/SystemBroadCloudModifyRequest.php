<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadCloudModifyRequest
 *
 * Modify the system interface attributes for Messaging Server/BroadCloud.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2126","type":"sequence"}]
 */
class SystemBroadCloudModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName provisioningUrl
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2126
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2126
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUserId = null;

    /**
     * @ElementName provisioningPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2126
     * @MinLength 1
     * @MaxLength 20
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningPassword = null;

    /**
     * @ElementName enableSynchronization
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2126
     * @var bool|null
     */
    private $enableSynchronization = null;

    /**
     * Getter for provisioningUrl
     *
     * @return string|null
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @param string|null $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl = null)
    {
        if ($provisioningUrl === null) {
            $this->provisioningUrl = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningUrl = $provisioningUrl;
        }
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
     * @return string|null
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @param string|null $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId = null)
    {
        if ($provisioningUserId === null) {
            $this->provisioningUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningUserId = $provisioningUserId;
        }
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
     * Getter for provisioningPassword
     *
     * @return string|null
     */
    public function getProvisioningPassword()
    {
        return $this->provisioningPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningPassword;
    }

    /**
     * Setter for provisioningPassword
     *
     * @param string|null $provisioningPassword
     * @return $this
     */
    public function setProvisioningPassword($provisioningPassword = null)
    {
        if ($provisioningPassword === null) {
            $this->provisioningPassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningPassword = $provisioningPassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningPassword()
    {
        $this->provisioningPassword = null;
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

