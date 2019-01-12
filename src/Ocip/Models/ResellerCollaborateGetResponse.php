<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCollaborateGetResponse
 *
 * Response to ResellerCollaborateGetRequest.
 *
 * @see ResellerCollaborateGetRequest
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:478","type":"sequence"}]
 */
class ResellerCollaborateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName collaborateFromAddress
     * @Type string
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:478
     * @var string|null
     */
    private $collaborateFromAddress = null;

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

