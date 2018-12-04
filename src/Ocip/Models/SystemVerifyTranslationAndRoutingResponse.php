<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVerifyTranslationAndRoutingResponse
 *
 * Represents a Verify Translation and Routing Test Call Result.
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:16893","type":"sequence"}]
 */
class SystemVerifyTranslationAndRoutingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName Result
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:16893
     * @var string|null
     */
    private $Result = null;

    /**
     * Getter for Result
     *
     *
     *                 The Verify Translation and Routing log created by the request.
     *               
     *
     * @return string
     */
    public function getResult()
    {
        return $this->Result instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->Result;
    }

    /**
     * Setter for Result
     *
     *
     *                 The Verify Translation and Routing log created by the request.
     *               
     *
     * @param string $Result
     * @return $this
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResult()
    {
        $this->Result = null;
        return $this;
    }


}

