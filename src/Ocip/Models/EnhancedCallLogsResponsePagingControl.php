<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsResponsePagingControl
 *
 * Used in enhanced call logs group and enterprise queries to restrict the set of result
 *         rows when making a request that can result in a large dataset. The client specifies the
 *         starting row and the number of rows requested. 
 *         The server only provides those rows in results, if available.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3026","type":"sequence"}]
 */
class EnhancedCallLogsResponsePagingControl
{
    /**
     * @ElementName responseStartIndex
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3026
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseStartIndex = null;

    /**
     * @ElementName responsePageSize
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3026
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $responsePageSize = null;

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

