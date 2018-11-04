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
 */
class SystemBroadCloudModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName provisioningUrl
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningUserId = null;

    /**
     * @ElementName provisioningPassword
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningPassword = null;

    /**
     * @ElementName enableSynchronization
     * @var bool|null
     */
    private $enableSynchronization = null;

    /**
     * Getter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        $this->provisioningUrl = $provisioningUrl;
        return $this;
    }

    /**
     * Getter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        $this->provisioningUserId = $provisioningUserId;
        return $this;
    }

    /**
     * Getter for provisioningPassword
     *
     * @ElementName provisioningPassword
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningPassword()
    {
        return $this->provisioningPassword;
    }

    /**
     * Setter for provisioningPassword
     *
     * @ElementName provisioningPassword
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningPassword
     * @return $this
     */
    public function setProvisioningPassword($provisioningPassword)
    {
        $this->provisioningPassword = $provisioningPassword;
        return $this;
    }

    /**
     * Getter for enableSynchronization
     *
     * @ElementName enableSynchronization
     * @return bool|null
     */
    public function getEnableSynchronization()
    {
        return $this->enableSynchronization;
    }

    /**
     * Setter for enableSynchronization
     *
     * @ElementName enableSynchronization
     * @param bool|null $enableSynchronization
     * @return $this
     */
    public function setEnableSynchronization($enableSynchronization)
    {
        $this->enableSynchronization = $enableSynchronization;
        return $this;
    }


}

