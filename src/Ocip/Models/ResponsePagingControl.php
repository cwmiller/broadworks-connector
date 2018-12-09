<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResponsePagingControl
 *
 * Used in queries to restrict the set of result rows when making a request that can result in
 *         a large dataset. The client specifies the starting row and the number of rows requested. 
 *         The server only provides those rows in results, if available.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:3011","type":"sequence"}]
 */
class ResponsePagingControl
{

    /**
     * @ElementName responseStartIndex
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:3011
     * @var int|null
     */
    private $responseStartIndex = null;

    /**
     * @ElementName responsePageSize
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:3011
     * @var int|null
     */
    private $responsePageSize = null;

    /**
     * Getter for responseStartIndex
     *
     * @return int
     */
    public function getResponseStartIndex()
    {
        return $this->responseStartIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseStartIndex;
    }

    /**
     * Setter for responseStartIndex
     *
     * @param int $responseStartIndex
     * @return $this
     */
    public function setResponseStartIndex($responseStartIndex)
    {
        $this->responseStartIndex = $responseStartIndex;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseStartIndex()
    {
        $this->responseStartIndex = null;
        return $this;
    }

    /**
     * Getter for responsePageSize
     *
     * @return int
     */
    public function getResponsePageSize()
    {
        return $this->responsePageSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responsePageSize;
    }

    /**
     * Setter for responsePageSize
     *
     * @param int $responsePageSize
     * @return $this
     */
    public function setResponsePageSize($responsePageSize)
    {
        $this->responsePageSize = $responsePageSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponsePageSize()
    {
        $this->responsePageSize = null;
        return $this;
    }


}

