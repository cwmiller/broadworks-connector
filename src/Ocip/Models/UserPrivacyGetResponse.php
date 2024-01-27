<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetResponse
 *
 * Response to UserPrivacyGetRequest.
 *
 * @see UserPrivacyGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46363","type":"sequence"}]
 */
class UserPrivacyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableDirectoryPrivacy
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:46363
     * @var bool|null
     */
    protected $enableDirectoryPrivacy = null;

    /**
     * Getter for enableDirectoryPrivacy
     *
     * @return bool
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDirectoryPrivacy;
    }

    /**
     * Setter for enableDirectoryPrivacy
     *
     * @param bool $enableDirectoryPrivacy
     * @return $this
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $this->enableDirectoryPrivacy = $enableDirectoryPrivacy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDirectoryPrivacy()
    {
        $this->enableDirectoryPrivacy = null;
        return $this;
    }
}

