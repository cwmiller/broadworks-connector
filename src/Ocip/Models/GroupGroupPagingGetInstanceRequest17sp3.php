<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetInstanceRequest17sp3
 *
 * Request to get all the information of a Group Paging instance.
 *         The response is either GroupGroupPagingGetInstanceResponse17sp3 or ErrorResponse.
 *         
 *         Replaced by: GroupGroupPagingGetInstanceRequest19sp1
 *
 * @see GroupGroupPagingGetInstanceResponse17sp3
 * @see ErrorResponse
 * @see GroupGroupPagingGetInstanceRequest19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:10054","type":"sequence"}]
 */
class GroupGroupPagingGetInstanceRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10054
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

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


}

