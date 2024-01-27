<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIMRNUnassignListRequest
 *
 * Unassign a list of group DNs from the group IMRN pool. The DNs then become available for
 *         assignment to users. It is possible to delete either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6134","type":"sequence"}]
 */
class GroupIMRNUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:6134
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:6134
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName imrn
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:6134
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $imrn = [
        
    ];

    /**
     * @ElementName imrnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:6134
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    protected $imrnRange = [
        
    ];

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for imrn
     *
     * @return string[]
     */
    public function getImrn()
    {
        return $this->imrn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrn;
    }

    /**
     * Setter for imrn
     *
     * @param string[] $imrn
     * @return $this
     */
    public function setImrn(array $imrn)
    {
        $this->imrn = $imrn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrn()
    {
        $this->imrn = null;
        return $this;
    }

    /**
     * Adder for imrn
     *
     * @param string $imrn
     * @return $this
     */
    public function addImrn(string $imrn)
    {
        $this->imrn[] = $imrn;
        return $this;
    }

    /**
     * Getter for imrnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getImrnRange()
    {
        return $this->imrnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnRange;
    }

    /**
     * Setter for imrnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $imrnRange
     * @return $this
     */
    public function setImrnRange(array $imrnRange)
    {
        $this->imrnRange = $imrnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnRange()
    {
        $this->imrnRange = null;
        return $this;
    }

    /**
     * Adder for imrnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $imrnRange
     * @return $this
     */
    public function addImrnRange($imrnRange)
    {
        $this->imrnRange[] = $imrnRange;
        return $this;
    }
}

