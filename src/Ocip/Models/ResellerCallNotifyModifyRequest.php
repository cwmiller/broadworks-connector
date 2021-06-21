<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallNotifyModifyRequest
 *
 * Modify the reseller level data associated with Call Notify.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"26f62134ab1693f4bdddc7c70b20d2eb:81","type":"sequence"}]
 */
class ResellerCallNotifyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:81
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:81
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultFromAddress = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for defaultFromAddress
     *
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        if ($defaultFromAddress === null) {
            $this->defaultFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultFromAddress = $defaultFromAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }


}

