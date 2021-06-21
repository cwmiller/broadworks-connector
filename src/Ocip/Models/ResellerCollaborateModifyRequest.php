<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCollaborateModifyRequest
 *
 * Modify the reseller level data associated with Collaborate.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:494","type":"sequence"}]
 */
class ResellerCollaborateModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:494
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName collaborateFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:494
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $collaborateFromAddress = null;

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
     * Getter for collaborateFromAddress
     *
     * @return string|null
     */
    public function getCollaborateFromAddress()
    {
        return $this->collaborateFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateFromAddress;
    }

    /**
     * Setter for collaborateFromAddress
     *
     * @param string|null $collaborateFromAddress
     * @return $this
     */
    public function setCollaborateFromAddress($collaborateFromAddress = null)
    {
        if ($collaborateFromAddress === null) {
            $this->collaborateFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->collaborateFromAddress = $collaborateFromAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateFromAddress()
    {
        $this->collaborateFromAddress = null;
        return $this;
    }


}

