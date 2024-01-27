<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerXsiPolicyProfileGetAssignedListRequest
 *
 * Get a list of Xsi policy profile assigned.
 *         The response is either a ResellerXsiPolicyProfileGetAssignedListResponse 
 *         or an ErrorResponse.
 *
 * @see ResellerXsiPolicyProfileGetAssignedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:982","type":"sequence"}]
 */
class ResellerXsiPolicyProfileGetAssignedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:982
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:982
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel|null
     */
    protected $level = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for level
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     */
    public function getLevel()
    {
        return $this->level instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->level;
    }

    /**
     * Setter for level
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLevel()
    {
        $this->level = null;
        return $this;
    }
}

