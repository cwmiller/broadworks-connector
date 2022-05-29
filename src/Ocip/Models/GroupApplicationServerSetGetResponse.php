<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupApplicationServerSetGetResponse
 *
 * Response to the GroupApplicationServerSetGetRequest.
 *         The response contains the group's Application Server set information.
 *
 * @see GroupApplicationServerSetGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2158","type":"sequence"}]
 */
class GroupApplicationServerSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationServerSetName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2158
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $applicationServerSetName = null;

    /**
     * Getter for applicationServerSetName
     *
     * @return string
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerSetName;
    }

    /**
     * Setter for applicationServerSetName
     *
     * @param string $applicationServerSetName
     * @return $this
     */
    public function setApplicationServerSetName($applicationServerSetName)
    {
        $this->applicationServerSetName = $applicationServerSetName;
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

