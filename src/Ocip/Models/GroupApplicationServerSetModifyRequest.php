<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupApplicationServerSetModifyRequest
 *
 * Modify the Application Server set for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1668","type":"sequence"}]
 */
class GroupApplicationServerSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1668
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1668
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName applicationServerSetName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1668
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationServerSetName = null;

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
     * Getter for applicationServerSetName
     *
     * @return string|null
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerSetName;
    }

    /**
     * Setter for applicationServerSetName
     *
     * @param string|null $applicationServerSetName
     * @return $this
     */
    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        if ($applicationServerSetName === null) {
            $this->applicationServerSetName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationServerSetName = $applicationServerSetName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationServerSetName()
    {
        $this->applicationServerSetName = null;
        return $this;
    }


}

