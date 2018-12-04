<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest
 *
 * Request the Call Me Now call permissions for digit patterns for a group default and it's departments.
 *         The response is either a GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse or an ErrorResponse.
 *
 * @see GroupOutgoingCallingPlanDigitPlanCallMeNowGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:267","type":"sequence"}]
 */
class GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:267
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:267
     * @var string|null
     */
    private $groupId = null;

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


}

