<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest
 *
 * Delete a list of system level successful SIP OPTIONS message respoonse status
 * codes. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTrunkGroupOptionsMessageResponseStatusCodeDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName statusCode
     * @var string[]
     */
    private $statusCode = array(
        
    );

    /**
     * Getter for statusCode
     *
     * @ElementName statusCode
     * @return string[]
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Setter for statusCode
     *
     * @ElementName statusCode
     * @param string[] $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Adder for statusCode
     *
     * @ElementName statusCode
     * @param string $statusCode
     * @return $this
     */
    public function addStatusCode($statusCode)
    {
        $this->statusCode []= $statusCode;
        return $this;
    }


}

