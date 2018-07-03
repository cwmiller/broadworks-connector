<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupApplicationServerSetGetResponse
 *
 * Response to the GroupApplicationServerSetGetRequest.
 *         The response contains the group's Application Server set information.
 *
 * @see GroupApplicationServerSetGetRequest
 */
class GroupApplicationServerSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationServerSetName
     * @var string|null
     */
    private $applicationServerSetName = null;

    /**
     * Getter for applicationServerSetName
     *
     * @ElementName applicationServerSetName
     * @return string|null
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName;
    }

    /**
     * Setter for applicationServerSetName
     *
     * @ElementName applicationServerSetName
     * @param string|null $applicationServerSetName
     * @return $this
     */
    public function setApplicationServerSetName($applicationServerSetName)
    {
        $this->applicationServerSetName = $applicationServerSetName;
        return $this;
    }


}

