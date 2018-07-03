<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse
 *
 * Response to the SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest.
 *         The response contains of the list of system level successful SIP OPTIONS
 * message respoonse status codes.
 *
 * @see SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest
 */
class SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

