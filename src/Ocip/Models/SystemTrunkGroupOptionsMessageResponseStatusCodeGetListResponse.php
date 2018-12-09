<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse
 *
 * Response to the SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest.
 *         The response contains of the list of system level successful SIP OPTIONS message respoonse status codes.
 *
 * @see SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest
 * @Groups [{"id":"762df656d5a3c5800001b37599b1e4ce:1680","type":"sequence"}]
 */
class SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusCode
     * @Type string
     * @Array
     * @Optional
     * @Group 762df656d5a3c5800001b37599b1e4ce:1680
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

