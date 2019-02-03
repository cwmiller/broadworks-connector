<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse
 *
 * Response to the SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest.
 *         The response contains of the list of system level successful SIP OPTIONS message respoonse status codes.
 *
 * @see SystemTrunkGroupOptionsMessageResponseStatusCodeGetListRequest
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1777","type":"sequence"}]
 */
class SystemTrunkGroupOptionsMessageResponseStatusCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusCode
     * @Type string
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1777
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

