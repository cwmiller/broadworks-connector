<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationDeleteACLEntryRequest
 *
 * Delete an entry from the OCI call control application access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13561","type":"sequence"}]
 */
class SystemOCICallControlApplicationDeleteACLEntryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName applicationId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13561
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $applicationId = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13561
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * Getter for applicationId
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param string $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }
}

