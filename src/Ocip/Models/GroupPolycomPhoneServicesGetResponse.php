<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolycomPhoneServicesGetResponse
 *
 * Response to GroupPolycomPhoneServicesGetRequest.
 *
 * @see GroupPolycomPhoneServicesGetRequest
 */
class GroupPolycomPhoneServicesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName includeGroupCommonPhoneListInDirectory
     * @Type bool
     * @var bool|null
     */
    private $includeGroupCommonPhoneListInDirectory = null;

    /**
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @Type bool
     * @var bool|null
     */
    private $includeGroupCustomContactDirectoryInDirectory = null;

    /**
     * @ElementName groupCustomContactDirectory
     * @Type string
     * @var string|null
     */
    private $groupCustomContactDirectory = null;

    /**
     * Getter for includeGroupCommonPhoneListInDirectory
     *
     * @return bool
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return $this->includeGroupCommonPhoneListInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeGroupCommonPhoneListInDirectory;
    }

    /**
     * Setter for includeGroupCommonPhoneListInDirectory
     *
     * @param bool $includeGroupCommonPhoneListInDirectory
     * @return $this
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory)
    {
        $this->includeGroupCommonPhoneListInDirectory = $includeGroupCommonPhoneListInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeGroupCommonPhoneListInDirectory()
    {
        $this->includeGroupCommonPhoneListInDirectory = null;
        return $this;
    }

    /**
     * Getter for includeGroupCustomContactDirectoryInDirectory
     *
     * @return bool
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return $this->includeGroupCustomContactDirectoryInDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * Setter for includeGroupCustomContactDirectoryInDirectory
     *
     * @param bool $includeGroupCustomContactDirectoryInDirectory
     * @return $this
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = $includeGroupCustomContactDirectoryInDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeGroupCustomContactDirectoryInDirectory()
    {
        $this->includeGroupCustomContactDirectoryInDirectory = null;
        return $this;
    }

    /**
     * Getter for groupCustomContactDirectory
     *
     * @return string
     */
    public function getGroupCustomContactDirectory()
    {
        return $this->groupCustomContactDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCustomContactDirectory;
    }

    /**
     * Setter for groupCustomContactDirectory
     *
     * @param string $groupCustomContactDirectory
     * @return $this
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory)
    {
        $this->groupCustomContactDirectory = $groupCustomContactDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCustomContactDirectory()
    {
        $this->groupCustomContactDirectory = null;
        return $this;
    }


}

