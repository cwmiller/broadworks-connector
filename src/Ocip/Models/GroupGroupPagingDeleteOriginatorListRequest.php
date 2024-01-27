<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingDeleteOriginatorListRequest
 *
 * Delete originator(s) from a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:139","type":"sequence"}]
 */
class GroupGroupPagingDeleteOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 8ede928f2a9c1318573ba9c7a105655c:139
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName originatorUserId
     * @Type string
     * @Array
     * @Group 8ede928f2a9c1318573ba9c7a105655c:139
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $originatorUserId = [
        
    ];

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
     * Getter for originatorUserId
     *
     * @return string[]
     */
    public function getOriginatorUserId()
    {
        return $this->originatorUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatorUserId;
    }

    /**
     * Setter for originatorUserId
     *
     * @param string[] $originatorUserId
     * @return $this
     */
    public function setOriginatorUserId(array $originatorUserId)
    {
        $this->originatorUserId = $originatorUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatorUserId()
    {
        $this->originatorUserId = null;
        return $this;
    }

    /**
     * Adder for originatorUserId
     *
     * @param string $originatorUserId
     * @return $this
     */
    public function addOriginatorUserId(string $originatorUserId)
    {
        $this->originatorUserId[] = $originatorUserId;
        return $this;
    }
}

