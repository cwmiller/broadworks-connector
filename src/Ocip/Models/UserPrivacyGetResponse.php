<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetResponse
 *
 * Response to UserPrivacyGetRequest.
 *
 * @see UserPrivacyGetRequest
 */
class UserPrivacyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableDirectoryPrivacy
     * @var bool|null
     */
    private $enableDirectoryPrivacy = null;

    /**
     * Getter for enableDirectoryPrivacy
     *
     * @ElementName enableDirectoryPrivacy
     * @return bool|null
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy;
    }

    /**
     * Setter for enableDirectoryPrivacy
     *
     * @ElementName enableDirectoryPrivacy
     * @param bool|null $enableDirectoryPrivacy
     * @return $this
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $this->enableDirectoryPrivacy = $enableDirectoryPrivacy;
        return $this;
    }


}

