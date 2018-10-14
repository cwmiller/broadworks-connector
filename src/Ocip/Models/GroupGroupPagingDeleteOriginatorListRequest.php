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
 */
class GroupGroupPagingDeleteOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName originatorUserId
     * @var string[]
     */
    private $originatorUserId = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for originatorUserId
     *
     * @ElementName originatorUserId
     * @return string[]
     */
    public function getOriginatorUserId()
    {
        return $this->originatorUserId;
    }

    /**
     * Setter for originatorUserId
     *
     * @ElementName originatorUserId
     * @param string[] $originatorUserId
     * @return $this
     */
    public function setOriginatorUserId(array $originatorUserId)
    {
        $this->originatorUserId = $originatorUserId;
        return $this;
    }

    /**
     * Adder for originatorUserId
     *
     * @ElementName originatorUserId
     * @param string $originatorUserId
     * @return $this
     */
    public function addOriginatorUserId(string $originatorUserId)
    {
        $this->originatorUserId []= $originatorUserId;
        return $this;
    }


}

