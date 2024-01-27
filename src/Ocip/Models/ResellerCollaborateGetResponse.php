<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCollaborateGetResponse
 *
 * Response to ResellerCollaborateGetRequest.
 *
 * @see ResellerCollaborateGetRequest
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:478","type":"sequence"}]
 */
class ResellerCollaborateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName collaborateFromAddress
     * @Type string
     * @Optional
     * @Group bc805893b9cc7e3e01eec64e9ad62768:478
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $collaborateFromAddress = null;

    /**
     * Getter for collaborateFromAddress
     *
     * @return string
     */
    public function getCollaborateFromAddress()
    {
        return $this->collaborateFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateFromAddress;
    }

    /**
     * Setter for collaborateFromAddress
     *
     * @param string $collaborateFromAddress
     * @return $this
     */
    public function setCollaborateFromAddress($collaborateFromAddress)
    {
        $this->collaborateFromAddress = $collaborateFromAddress;
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

