<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse
 *
 * Response to the SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest.
 *         The response contains of the list of system level successful SIP OPTIONS message respoonse status codes.
 *
 * @see SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1855","type":"sequence"}]
 */
class SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName statusCode
     * @Type string
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1855
     * @MinLength 3
     * @MaxLength 40
     * @var string[]
     */
    protected $statusCode = [
        
    ];

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

