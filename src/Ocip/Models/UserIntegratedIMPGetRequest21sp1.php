<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetRequest21sp1
 *
 * Get the Integrated IMP specific service attribute for the user.
 *         The response is either UserIMPGetResponse21sp1 or ErrorResponse.
 *
 * @see UserIMPGetResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:332","type":"sequence"}]
 */
class UserIntegratedIMPGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:332
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}

