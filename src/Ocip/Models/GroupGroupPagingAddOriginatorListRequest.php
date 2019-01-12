<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingAddOriginatorListRequest
 *
 * Add originator(s) to a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d36df8c109e3ea7324f79031368c661:85","type":"sequence"}]
 */
class GroupGroupPagingAddOriginatorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0d36df8c109e3ea7324f79031368c661:85
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName originatorUserId
     * @Type string
     * @Array
     * @Group 0d36df8c109e3ea7324f79031368c661:85
     * @var string[]
     */
    private $originatorUserId = array(
        
    );

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

