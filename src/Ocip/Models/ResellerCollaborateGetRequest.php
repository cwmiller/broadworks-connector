<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCollaborateGetRequest
 *
 * Request the reseller level data associated with Collaborate.
 *         The response is either a ResellerCollaborateGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerCollaborateGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:464","type":"sequence"}]
 */
class ResellerCollaborateGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:464
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

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


}

