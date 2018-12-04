<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest
 *
 * Sends an email with the carrier information and certificate files.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b561eca19800e0898f471e5e91eb3baa:397","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b561eca19800e0898f471e5e91eb3baa:397
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName emailTo
     * @Type string
     * @Group b561eca19800e0898f471e5e91eb3baa:397
     * @var string|null
     */
    private $emailTo = null;

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
     * Getter for emailTo
     *
     * @return string
     */
    public function getEmailTo()
    {
        return $this->emailTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailTo;
    }

    /**
     * Setter for emailTo
     *
     * @param string $emailTo
     * @return $this
     */
    public function setEmailTo($emailTo)
    {
        $this->emailTo = $emailTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailTo()
    {
        $this->emailTo = null;
        return $this;
    }


}

