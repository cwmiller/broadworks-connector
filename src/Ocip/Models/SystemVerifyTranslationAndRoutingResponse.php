<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVerifyTranslationAndRoutingResponse
 *
 * Represents a Verify Translation and Routing Test Call Result.
 */
class SystemVerifyTranslationAndRoutingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName Result
     * @Type string
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

