<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointQueueCallDispositionCodeGetRequest
 *
 * Get a Route Point Call Disposition Code.
 *         The response is either GroupRoutePointQueueCallDispositionCodeGetResponse or ErrorResponse.
 *
 * @see GroupRoutePointQueueCallDispositionCodeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"08c06bb3683a696d340b1644025134a4:1091","type":"sequence"}]
 */
class GroupRoutePointQueueCallDispositionCodeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 08c06bb3683a696d340b1644025134a4:1091
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName code
     * @Type string
     * @Group 08c06bb3683a696d340b1644025134a4:1091
     * @var string|null
     */
    private $code = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }


}

