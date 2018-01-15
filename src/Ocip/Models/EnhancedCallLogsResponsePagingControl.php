<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsResponsePagingControl
 *
 * Used in enhanced call logs group and enterprise queries to restrict the set of
 * result
 *         rows when making a request that can result in a large dataset. The
 * client specifies the
 *         starting row and the number of rows requested. 
 *         The server only provides those rows in results, if available.
 */
class EnhancedCallLogsResponsePagingControl
{

    /**
     * @ElementName responseStartIndex
     * @var int|null
     */
    private $responseStartIndex = null;

    /**
     * @ElementName responsePageSize
     * @var int|null
     */
    private $responsePageSize = null;

    /**
     * Getter for responseStartIndex
     *
     * @ElementName responseStartIndex
     * @return int|null
     */
    public function getResponseStartIndex()
    {
        return $this->responseStartIndex;
    }

    /**
     * Setter for responseStartIndex
     *
     * @ElementName responseStartIndex
     * @param int|null $responseStartIndex
     * @return $this
     */
    public function setResponseStartIndex($responseStartIndex)
    {
        $this->responseStartIndex = $responseStartIndex;
        return $this;
    }

    /**
     * Getter for responsePageSize
     *
     * @ElementName responsePageSize
     * @return int|null
     */
    public function getResponsePageSize()
    {
        return $this->responsePageSize;
    }

    /**
     * Setter for responsePageSize
     *
     * @ElementName responsePageSize
     * @param int|null $responsePageSize
     * @return $this
     */
    public function setResponsePageSize($responsePageSize)
    {
        $this->responsePageSize = $responsePageSize;
        return $this;
    }


}

