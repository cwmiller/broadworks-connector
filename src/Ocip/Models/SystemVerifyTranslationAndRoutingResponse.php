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
     * The Verify Translation and Routing log created by the request.
     *               
     *
     * @ElementName Result
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
     * @ElementName Result
     * @return string|null
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * Setter for Result
     *
     *
     *                 The Verify Translation and Routing log created by the request.
     *               
     *
     * @ElementName Result
     * @param string|null $Result
     * @return $this
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }


}

