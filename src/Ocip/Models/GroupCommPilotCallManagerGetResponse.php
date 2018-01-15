<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommPilotCallManagerGetResponse
 *
 * Response to GroupCommPilotCallManagerGetRequest.
 */
class GroupCommPilotCallManagerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDirectory
     * @var string|null
     */
    private $groupDirectory = null;

    /**
     * Getter for groupDirectory
     *
     * @ElementName groupDirectory
     * @return string|null
     */
    public function getGroupDirectory()
    {
        return $this->groupDirectory;
    }

    /**
     * Setter for groupDirectory
     *
     * @ElementName groupDirectory
     * @param string|null $groupDirectory
     * @return $this
     */
    public function setGroupDirectory($groupDirectory)
    {
        $this->groupDirectory = $groupDirectory;
        return $this;
    }


}

