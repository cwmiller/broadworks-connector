<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesGetResponse
 *
 * Response to UserPolycomPhoneServicesGetRequest.
 */
class UserPolycomPhoneServicesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName integratePhoneDirectoryWithBroadWorks
     * @var bool|null
     */
    private $integratePhoneDirectoryWithBroadWorks = null;

    /**
     * @ElementName includeUserPersonalPhoneListInDirectory
     * @var bool|null
     */
    private $includeUserPersonalPhoneListInDirectory = null;

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
     * Getter for integratePhoneDirectoryWithBroadWorks
     *
     * @ElementName integratePhoneDirectoryWithBroadWorks
     * @return bool|null
     */
    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return $this->integratePhoneDirectoryWithBroadWorks;
    }

    /**
     * Setter for integratePhoneDirectoryWithBroadWorks
     *
     * @ElementName integratePhoneDirectoryWithBroadWorks
     * @param bool|null $integratePhoneDirectoryWithBroadWorks
     * @return $this
     */
    public function setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks)
    {
        $this->integratePhoneDirectoryWithBroadWorks = $integratePhoneDirectoryWithBroadWorks;
        return $this;
    }

    /**
     * Getter for includeUserPersonalPhoneListInDirectory
     *
     * @ElementName includeUserPersonalPhoneListInDirectory
     * @return bool|null
     */
    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return $this->includeUserPersonalPhoneListInDirectory;
    }

    /**
     * Setter for includeUserPersonalPhoneListInDirectory
     *
     * @ElementName includeUserPersonalPhoneListInDirectory
     * @param bool|null $includeUserPersonalPhoneListInDirectory
     * @return $this
     */
    public function setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory)
    {
        $this->includeUserPersonalPhoneListInDirectory = $includeUserPersonalPhoneListInDirectory;
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

