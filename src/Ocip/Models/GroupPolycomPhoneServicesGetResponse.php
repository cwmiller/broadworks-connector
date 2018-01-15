<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPolycomPhoneServicesGetResponse
 *
 * Response to GroupPolycomPhoneServicesGetRequest.
 */
class GroupPolycomPhoneServicesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName includeGroupCommonPhoneListInDirectory
     * @var bool|null
     */
    private $includeGroupCommonPhoneListInDirectory = null;

    /**
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @var bool|null
     */
    private $includeGroupCustomContactDirectoryInDirectory = null;

    /**
     * @ElementName groupCustomContactDirectory
     * @var string|null
     */
    private $groupCustomContactDirectory = null;

    /**
     * Getter for includeGroupCommonPhoneListInDirectory
     *
     * @ElementName includeGroupCommonPhoneListInDirectory
     * @return bool|null
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return $this->includeGroupCommonPhoneListInDirectory;
    }

    /**
     * Setter for includeGroupCommonPhoneListInDirectory
     *
     * @ElementName includeGroupCommonPhoneListInDirectory
     * @param bool|null $includeGroupCommonPhoneListInDirectory
     * @return $this
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory)
    {
        $this->includeGroupCommonPhoneListInDirectory = $includeGroupCommonPhoneListInDirectory;
        return $this;
    }

    /**
     * Getter for includeGroupCustomContactDirectoryInDirectory
     *
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @return bool|null
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return $this->includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * Setter for includeGroupCustomContactDirectoryInDirectory
     *
     * @ElementName includeGroupCustomContactDirectoryInDirectory
     * @param bool|null $includeGroupCustomContactDirectoryInDirectory
     * @return $this
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = $includeGroupCustomContactDirectoryInDirectory;
        return $this;
    }

    /**
     * Getter for groupCustomContactDirectory
     *
     * @ElementName groupCustomContactDirectory
     * @return string|null
     */
    public function getGroupCustomContactDirectory()
    {
        return $this->groupCustomContactDirectory;
    }

    /**
     * Setter for groupCustomContactDirectory
     *
     * @ElementName groupCustomContactDirectory
     * @param string|null $groupCustomContactDirectory
     * @return $this
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory)
    {
        $this->groupCustomContactDirectory = $groupCustomContactDirectory;
        return $this;
    }


}

