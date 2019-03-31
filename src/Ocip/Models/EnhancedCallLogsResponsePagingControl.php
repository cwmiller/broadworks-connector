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
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2166","type":"sequence"}]
 */
class EnhancedCallLogsResponsePagingControl
{

    /**
     * @ElementName responseStartIndex
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2166
     * @MinInclusive 1
     * @var int|null
     */
    private $responseStartIndex = null;

    /**
     * @ElementName responsePageSize
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2166
     * @MinInclusive 1
     * @MaxInclusive 1000
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

