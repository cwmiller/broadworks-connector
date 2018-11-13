<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest
 *
 * Add a list of system level successful SIP OPTIONS message respoonse status
 * codes. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTrunkGroupOptionsMessageResponseStatusCodeAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName statusCode
     * @Type string
     * @Array
     * @var string[]
     */
    private $statusCode = array(
        
    );

    /**
     * Getter for statusCode
     *
     * @return string[]
     */
    public function getStatusCode()
    {
        return $this->statusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusCode;
    }

    /**
     * Setter for statusCode
     *
     * @param string[] $statusCode
     * @return $this
     */
    public function setStatusCode(array $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusCode()
    {
        $this->statusCode = null;
        return $this;
    }

    /**
     * Adder for statusCode
     *
     * @param string $statusCode
     * @return $this
     */
    public function addStatusCode(string $statusCode)
    {
        $this->statusCode[] = $statusCode;
        return $this;
    }


}

